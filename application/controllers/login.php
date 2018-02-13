<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function masuk()
	{
		if ($this->input->post('login')) {
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->login_model->cek_user() == TRUE) {
					redirect('login/welcome');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_view', $data);
				}
				
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_view', $data);
			}
		} 
	}

	public function logout()
	{
		$data = array(
			'username' => '',
			'logged_in' => FALSE);
		$this->session->sess_destroy();
		redirect('login');
	}

	public function welcome()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'welcome_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */