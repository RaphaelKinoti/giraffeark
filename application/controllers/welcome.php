<?php defined ('BASEPATH') OR exit ('Access Denied');

class Welcome extends Ci_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('static/start');
	}

	public function invest()
	{
		$this->load->view('static/invest');
	}


	public function lost()
	{
		$this->load->view('static/404');
	}
}