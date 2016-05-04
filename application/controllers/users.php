<?php defined('BASEPATH') or exit('Access Denied');

class Users extends Core_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

	}

	public function feedback()
	{
		$this->load->view('user/feedback');
	}

	public function resetpassword()
	{
		$activation_code = $this->uri->segment(3);
		
		$email = $this->uri->segment(4);

		if($activation_code && $email)
		{
			$this->load->view('user/resetpassword');
		}

		else if($this->input->post())
		{
			$data = $this->input->post();

			$this->users->resetnow($data);
		}
	}

	public function passwordreset()
	{
		if($this->input->post())
		{
			$data = $this->input->post();

			$this->users->passwordreset();
		}
		else
		{
			$this->core->_404();
		}
	}
}