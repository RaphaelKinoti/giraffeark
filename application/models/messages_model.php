<?php defined('BASEPATH') or exit ('Access Denied');

class Messages_model extends Core_Model
{
	public function __construct()
	{
		parent::__construct();
		
	}	

	public function sendsms($data)
	{
		require_once(APPPATH.'libraries/africastalking/AfricasTalkingGateway.php');

		$api_username = $this->config->item('sms_api_username');

		$api_key = $this->config->item('sms_api_key');

		$recipient = $data['recipient'];

		$message = $data['message'];

		$gateway = new AfricasTalkingGateway($api_username,$api_key);

		try
		{
			$response = $gateway->sendMessage($recipient,$message,'MYMSANII');
		}

		catch(AfricasTalkingGatewayException $e)
		{
			echo 'A problem was encountered while sending: '.$e->getMessage();
		}
	}

	

	
}