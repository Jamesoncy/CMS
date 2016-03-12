<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Parent {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/User_model', 'user_model');
	}

	public function index()
	{
		echo 'User Here';
	}

        public function get_user($id)
	{
		echo $this->user_model->get_details();
	}

	public function user_delete($id)
	{
		echo $id;
	}
}
