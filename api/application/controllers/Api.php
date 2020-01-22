<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->library('form_validation');
	}

	

	function insert()
	{
			$data = array(
				'first_name'	=>	$this->input->post('first_name'),
				'last_name'		=>	$this->input->post('last_name'),
				'email'		=>	$this->input->post('email'),
				'phone'		=>	$this->input->post('phone'),
				'dob'		=>	$this->input->post('dob'),
				'gender'		=>	$this->input->post('gender')
			);

			$this->api_model->insert_api($data);

			$array = array(
				'success'		=>	true
			);



		echo json_encode($array);
	}
	
	
}


?>