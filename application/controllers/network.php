<?php defined('BASEPATH') OR exit('Access Denied!');

class Network extends Core_Controller
{
	public function __construct()
	{
		parent::__construct();

	}

	public function add()
	{
		$data = $this->input->post();

		if($data)
		{
			$this->network->add($data);
		}
		else
		{
			$this->load->view('user/addnetwork',array('user' => $this->user));
		}
	}

	public function page($var)
	{
		$network = $this->network->getnetwork($var);

		if($network)
		{
			$this->load->view('user/network',array('network' => $network,'user' => $this->user));
		}

		else
		{
			$this->load->view('user/network',array('network' => $network,'user' => $this->user));
		}
	}

	public function edit()
	{
		$data = $this->input->post();

		if($data)
		{
			$this->network->edit($data);

			redirect(base_url('profile/page/'.$this->users->log('url')));
		}
	}

	public function delete($id)
	{
		if($id)
		{
			$this->network->delete($id);

			redirect(base_url('profile/page/'.$this->users->log('url')));
		}
	}

	public function unetworks()
	{
		$this->load->view('user/unetworks',array('user' => $this->user));
	}
}