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
		$data = array(
			'example_title' => 'Ejemplo 1. Haciéndolo mal.'
		);

		// When some email comes
		if($this->input->post('email')){
			$data['email'] = $this->input->post('email');
			$data['users'] = $this->User_model->get_user_1($data['email']);
		}

		$this->load->view('templates/header');
		$this->load->view('examples/sqlinjection', $data);
		$this->load->view('templates/footer');
	}

	public function ejemplo2()
	{
		$data = array(
			'example_title' => 'Ejemplo 2. Utilizando el método “Escape”.'
		);

		// When some email comes
		if($this->input->post('email')){
			$data['email'] = $this->input->post('email');
			$data['users'] = $this->User_model->get_user_2($data['email']);
		}

		$this->load->view('templates/header');
		$this->load->view('examples/sqlinjection', $data);
		$this->load->view('templates/footer');
	}

	public function ejemplo3()
	{
		$data = array(
			'example_title' => 'Ejemplo 3. Utilizando el método “Query Binding”.'
		);

		// When some email comes
		if($this->input->post('email')){
			$data['email'] = $this->input->post('email');
			$data['users'] = $this->User_model->get_user_3($data['email']);
		}

		$this->load->view('templates/header');
		$this->load->view('examples/sqlinjection', $data);
		$this->load->view('templates/footer');
	}

	public function ejemplo4()
	{
		$data = array(
			'example_title' => 'Ejemplo 4. Utilizando la clase “Query Builder Class”.'
		);

		// When some email comes
		if($this->input->post('email')){
			$data['email'] = $this->input->post('email');
			$data['users'] = $this->User_model->get_user_4($data['email']);
		}

		$this->load->view('templates/header');
		$this->load->view('examples/sqlinjection', $data);
		$this->load->view('templates/footer');
	}

	public function ejemplo5()
	{
		$data = array(
			'example_title' => 'Ejemplo 5. Utilizando “Form Validation”.'
		);

		// Data validation here
		if($this->input->post('email')){
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->run() ? $data['validation'] = TRUE : $data['validation'] = FALSE;
		}
		
		// When some email comes
		if($this->input->post('email')){
			$data['email'] = $this->input->post('email');
			$data['users'] = $this->User_model->get_user_4($data['email']); // model request from last example, its the same
		}

		$this->load->view('templates/header');
		$this->load->view('examples/formvalidation', $data);
		$this->load->view('templates/footer');
	}

}
