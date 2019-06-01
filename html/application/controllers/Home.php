<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function ejemplo1()
	{
		$this->load->model('User_model');
		$data = array();

		// When some email comes
		if($this->input->post('email')){
			$data['email'] = $this->input->post('email');
			$data['users'] = $this->User_model->get_user_1($data['email']);
		}

		$this->load->view('templates/header');
		$this->load->view('examples/ejemplo1', $data);
		$this->load->view('templates/footer');
	}

}
