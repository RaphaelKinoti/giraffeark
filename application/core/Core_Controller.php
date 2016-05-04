<?php defined ('BASEPATH') or exit('Access Denied!');

class Core_Controller extends CI_Controller
{
	public $uid;

	public $admin;

	public $users;

	public $core;

	public $user;

	public $facebook;

	public $twitter;

	public $messages;

	public $artist;

	public $events;

	public $subscriptions;


	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Africa/Nairobi');

		$models =array(
			'users_model' => 'users',
			// 'facebook_model' => 'facebook',
			// 'twitter_model' => 'twitter',
			'messages_model' => 'messages',
			'network_model' => 'network',
			// 'events_model' => 'events',
			// 'subscriptions_model' => 'subscriptions',
			// 'posts_model'   => 'posts',
			// 'payment_model' => 'payment',
			// 'admin_model' => 'master',
			// 'reports_model' => 'reports'
		);

		foreach ($models as $file => $object_name) 
		{
			$this->load->model($file,$object_name);
		}

		if($this->users->log('uid'))
		{
			$this->uid = $this->users->log('uid');

			$this->admin = ($this->users->log('admin')) ? true : false;

			$this->user = $this->users->getuser('id',$this->uid);
		}				

		$this->core = new Core_Model();


	}
	

}