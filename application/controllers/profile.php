<?php defined('BASEPATH') OR exit('Access Denied!');

class Profile extends Core_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

	}

	public function page($var)
	{
		if(is_numeric($var))
		{
			$user = $this->users->getuser('id',$var);
		}
		else
		{
			$user = $this->users->getuser('url',$var);
		}

		if($user)
		{
			$this->load->view('user/profile',array('user' => $user));
		}

		else
		{
			redirect(base_url('welcome/lost'));
		}
	}

	public function verify($hash)
	{
		if($hash)
		{
			$this->users->verify($hash);
		}
	}

	public function confirm()
	{
		$data = $this->input->post();

		if($data)
		{
			$this->users->confirmAccount($data);
		}
	}

	public function signup()
	{
		$data = $this->input->post();

		if($data)
		{
			$this->users->signup($data);
		}
	}

	public function login()
	{
		$data = $this->input->post();

		if($data)
		{
			$this->users->login($data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url());
	}

	public function welcome($var)
	{
		if(is_numeric($var))
		{
			$user = $this->users->getuser('id',$var);
		}
		else
		{
			$user = $this->users->getuser('url',$var);
		}

		if($user)
		{
			$this->load->view('user/welcome',array('user' => $user));
		}

		else
		{
			redirect(base_url('welcome/lost'));
		}
	}

	public function loadwallet()
	{
		$user = $user = $this->users->getuser('id',$this->uid);

		$this->load->view('user/loadwallet',array('user' => $user));
	}

	public function edit()
	{
		$data = $this->input->post();

		if($data)
		{
			$this->users->edit($data);
		}

		else
		{
			$this->load->view('user/editprofile');
		}
	}

	public function delete($id)
	{
		if($id && $this->admin)
		{
			$this->users->delete($id);
		}
	}

	public function timeline()
	{
		$data = $this->network->gettimeline();

		if($data)
		{
			$this->load->view('user/timeline',array('data' => $data));
		}
	}

	public function getpage($page)
	{
		if($page)
		{
			$this->load->view('user/'.$page);
		}
	}

	public function changepicture()
	{
		if($this->input->post())
		{
			$data = $this->input->post();

			$response = $this->core->file_upload($data,'./images/people/');

			$this->session->set_userdata('pic',$response['file']);

			$newdata['pic'] = $response['file']; 

			$this->core->edit_one(array('table' => 'users','field' => 'id','var' => $this->users->log('uid'),'data' => $newdata));

			$this->core->write($response['file']);
		}
	}
}