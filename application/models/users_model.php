<?php defined ('BASEPATH') or exit('Access Denied!');

class Users_model extends Core_Model
{
	public $specs;

	public function __construct()
	{
		parent::__construct();
	}

	public function signup($data)
	{
		$email = trim($data['email']);

		if($this->validate(array('field' => 'email','value' => $email)))
		{
			if(!$this->value_exists(array('table' => 'users','value' => $email,'field' => 'email')))
			{
				$hash = md5($email);

				$verification_url = base_url('profile/verify/'.$hash);

				$parts = explode('@', $email);

				$user = array(
					'email' => $email,
					'url' => $parts['0'],
					'hash' => $hash,
					'phone' => $data['phone'],
					'name' => $parts['0'],
					'password' => md5($data['password']),
					'datecreated' => date('Y-m-d H:i:s')
				);

				$this->add_one(array('table' => 'users','data' => $user));

				$message = 'You have received this email you signed up at Taslimu. To verify your membership follow this link '.$verification_url;

				$this->sendmail(array(
					'sender_mail' => 'info@mymsanii.com',
					'sender_name' => 'Taslimu',
					'reply_to' => 'info@mymsanii.com',
					'recipient_mail' => $email,
					'subject' => 'Taslimu Account Verification',
					'message' => $message
				));

				$this->giveFeedback(array('type' => 'success','message' => 'Thanks for signing up at Taslimu. We have sent you an email with a link to verify your account.'));
			}
			else
			{
				$this->load->view('user/signup',array('error' => 'Email already registered'));
			}
		}
		else
		{
			$this->load->view('user/signup',array('error' => 'Invalid email'));
		}
	}

	public function getuser($field,$var)
	{
		if($field && $var)
		{
			return $this->get_one(array('table' => 'users','field' => $field,'var' => $var));
		}
	}

	public function verify($hash)
	{
		if($hash)
		{
			$user = $this->getuser('hash',$hash);

			if($user)
			{
				$this->messages->sendsms(array('message' => 'Verification Code: '. substr(md5($hash), 0,4),'recipient' => $user->phone));

				$this->load->view('user/verification',array('hash' => $hash));
			}
		}
	}

	public function confirmAccount($data)
	{
		if($data)
		{
			$hash = $data['hash'];

			$user = $this->getuser('hash',$hash);

			if($user)
			{
				if(substr(md5($hash), 0,4) === $data['code'])
				{

					$this->edit_one(array('table' => 'users','field' => 'id', 'var' => $user->id,'data' => array('status' => 1)));
					
					$this->set_user_session($user);
					
					redirect(base_url('profile/welcome/'.$user->url));
				}

				else
				{
					$this->load->view('user/verification',array('error' => 'Verification failed!'));
				}
			}
			else
			{
				redirect(base_url('welcome/signup'));
			}
		}
	}

	public function log($var)
	{
		return $this->session_data($var);
	}

	public function giveFeedback($data)
	{
		$this->load->view('user/feedback',array('data' => $data));
	}

	public function login($data)
	{
		$user = array_pop($this->where(array('table' => 'users','conditions' => array('password' => md5($data['password']),'email' => trim($data['email'])))));

		if($user)
		{
			$this->set_user_session($user);

			redirect(base_url('profile/page/'.$user->url));
		}

		else
		{
			$this->load->view('user/signin',array('error' => 'Wrong email or password!'));
		}
	}

	public function set_user_session($user)
	{
		$session_data = array(
			'uid' => $user->id,
			'name' => $user->name,
			'url' => $user->url,
			'email' => $user->email,
			'phone' => $user->phone,
			'pic' => $user->pic,
			'fb_uid' => $user->fb_uid,
			'tw_uid' => $user->tw_uid,
			'g_uid' => $user->g_uid,
			'admin' => ($user->level == 1) ? true : false,
			'bio' => $user->bio,
			'views' => $user->views,
			'status' => $user->status,
			'type' => $user->type
		);

		$this->session->set_userdata($session_data);
	}

	public function passwordreset()
	{
		$data = $this->input->post();

		$user_email = trim($data['user_email']);

		if(!$this->validate(array('field' => 'email','value' => $user_email)))
		{
			$this->load->view('user/forgotpassword',array('error' => 'Please provide a valid email address.'));
		}

		srand(mktime()); $activation_code = (rand());

		if(!$this->value_exists(array('table' => 'users','field' => 'email','value' => $user_email)))
		{			
			$this->load->view('user/forgotpassword',array('error' => 'Please signup first, it seems you are new to Taslimu.'));
		}

		else
		{
			$passwordreset_data = array(
				'user_email' => sha1($user_email),
				'activation_code' => $activation_code,
				'sent_timestamp' => date("Y-m-d H:i:s")
				);

			if($this->add_one(array('table' => 'password_reset','data' => $passwordreset_data)))
			{

				$this->sendmail(array(
					'sender_mail' => 'sender@mymsanii.com',
					'sender_name' => 'Taslimu',
					'reply_to' => 'sender@mymsanii.com',
					'recipient_mail' => $user_email,
					'subject' => 'Password Reset',
					'message' => 'Hello '.explode('@', $user_email)[0].', You have received this email
							 	 because you forgot your password. If you never requested to reset your 
							 	 password ignore this. To reset your password follow this link. <br>'
							 	 .base_url().'users/resetpassword/'.$activation_code.'/'.sha1($user_email))
				);

				$message = array('message' => 'We have sent you a link to help you recover your password.');

				$this->giveFeedback($message);
				
			}	

		}
	}

	public function resetnow($data)
	{			
		$reset_data = array(
			'activation_code' => $data['activation_code'],
			'url_user_email' => $data['url_user_email'],
			'user_email' => trim($data['user_email']),
			'new_password' => md5($data['password'])
		);

		if($this->value_exists(array('table' => 'password_reset','field' => 'activation_code','value' => $reset_data['activation_code'])) &&
			$this->value_exists(array('table' => 'password_reset','field' => 'user_email','value' => $reset_data['url_user_email'])) &&
			$this->value_exists(array('table' => 'users','field' => 'email','value' => $reset_data['user_email'])))
		{
			$new_data = array('password' => $reset_data['new_password']);

			$this->edit_one(array('table' => 'users','field' => 'email','var' => $reset_data['user_email'],'data' => $new_data));

			redirect(base_url('welcome/signin'));
		}
		else
		{			
			$this->load->view('user/resetpassword',array('error' => 'Failed! please use the email you signed up with.'));
		}	
	}

	public function edit($data)
	{
		$newdata = array('name' => trim($data['name']));

		$this->edit_one(array('table' => 'users','field' => 'id', 'var' => $this->user->id, 'data' => $newdata));
	}

	public function delete($id)
	{
		$this->remove_one(array('table' => 'users','field' => 'id', 'var' => $id));
	}


}