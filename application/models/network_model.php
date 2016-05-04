<?php defined('BASEPATH') OR exit('Access Denied!');

class Network_model extends Core_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function add($data)
	{
		$network = array();

		$id = $this->add_one(array('table' => 'networks','data' => $network));
	}

	public function getnetwork($id)
	{
		if($id)
		{
			return $this->get_one(array('table' => 'networks','field' => 'id', 'var' => $id));
		}
	}

	public function getnetworks($limit=6,$offset)
	{
		$specs = array(
			'table' => 'networks',
			'order_field' => 'id',
			'order' => 'desc',
			'filter_field' => 'status',
			'limit' => $limit,
			'offset' => $offset,
			'filter_value' => 1
		);

		return $this->get($specs);
	}


	public function edit($data,$id)
	{
		$newdata = array();

		if($this->edit_one(array('table' => 'networks','field' => 'id','var' => $id,'data' => $newdata)))
		{
			return true;
		}
	}

	public function delete($id)
	{
		$this->remove_one(array('table' => 'networks','field' => 'id', 'var' => $id));
	}

	public function invitePeople($data)
	{
		$phones_data = $data[''];

		$phones = implode(',', $phones_data);

		foreach($phones as $phone)
		{
			$message = '';

			$this->messsages->sendsms(array('recipient' => trim($phone),'message' => $message));
		}
	}

	public function gettimeline($limit=6,$offset)
	{
		$specs = array(
			'table' => 'activities',
			'order_field' => 'id',
			'order' => 'desc',
			'filter_field' => '',
			'limit' => $limit,
			'offset' => $offset,
			'filter_value' => ''
		);

		return $this->get($specs);
	}
}