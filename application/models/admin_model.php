<?php defined ('BASEPATH') OR exit ('Access Denied!');



class Admin_model extends Core_Model
{
	public function __construct()
	{
		parent::__construct();

	}

	public function index($page=null,$feedback=null)
	{
		$page = ($page) ? $page : 'signups';

		$data = $this->get_data($page);

		$this->load->view('admin/dashboard',array('context'=>$page,'data'=>$data,'feedback' => $feedback));
	}

	public function get_data($page)
	{
		switch($page)
		{
			case 'signups':
				return $this->users->getnewsignups();
			break;

			case 'users':
				return $this->users->getallusers();
			break;

		case 'bookings':
			return $this->artist->getallbookings();
		break;

		case 'emailing':
			return null;
		break;
		
			default :

			return null;
		}
	}
	public function emailing($which,$user=null)
	{
		switch ($which) 
		{
			case 'incomplete':
				
				if($user)
				{
					$key = $this->users->get_user('uid',$user);

					$email = array(
							'sender_mail' => 'info@mymsanii.com',
							'sender_name' => 'Mymsanii Team',
							'reply_to' => 'info@mymsanii.com',
							'recipient_mail' => $key->user_email,
							'subject' => 'Profile Completion',
							'message' => ''
						);

					$template = array('template' => 'emails/signuptemplate','data' => null);

					if(!empty($key->phone))
					{
						$this->messages->sendsms(array('recipient' => $key->phone,'message' => 'Hello, we have sent you an email regarding Mymsanii Profile Completion. Login now and complete your profile '.base_url('welcome/signin')));
					}

					$this->sendmail($email,$template);

					return true;
				}
				else
				{
					$users = $this->get_data('signups');

					if($users)
					{
						foreach($users as $key)
						{
							$template = array('template' => 'emails/signuptemplate','data' => null);

							$email = array(
								'sender_mail' => 'info@mymsanii.com',
								'sender_name' => 'Mymsanii Team',
								'reply_to' => 'info@mymsanii.com',
								'recipient_mail' => $key->user_email,
								'subject' => 'Mymsanii',
								'message' => ''
							);

							$this->sendmail($email,$template);

							if($key->phone)
							{
								$this->messages->sendsms(array('recipient' => $key->phone,'message' => 'Hello, we have sent you an email regarding Mymsanii Profile Completion. Login now and complete your profile '.base_url('welcome/signin')));
							}
						}

						redirect(base_url('admin/dashboard/emailing?type=success&&message='.count($users).' Emails Sent Successfully.'));
					}
				}

				break;
			
			default:
				
				break;
		}
	}
}