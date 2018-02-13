<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
	}

	public function data_pegawai()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {
			$data['data'] = $this->pegawai_model->get_data_pegawai();
			$data['main_view'] = 'pegawai/data_pegawai_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function add_pegawai()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {

			$idacak = rand(100, 999);
			$id = 'CREW'.$idacak;
			$data['id_acak'] = $id;

			$data['main_view'] = 'pegawai/add_pegawai_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function edit_pegawai()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {
			$id_pegawai = $this->uri->segment(3);
			$data['o'] = $this->pegawai_model->get_data_byID($id_pegawai);
			$data['main_view'] = 'pegawai/edit_pegawai_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function simpan_pegawai()
	{

			$idacak = rand(100, 999);
			$id = 'CREW'.$idacak;
			$data['id_acak'] = $id;

		if ($this->input->post('submit')) {
			
			$this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('telp_pegawai', 'No. Telepon', 'trim|required|numeric');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');

			if($this->form_validation->run() == TRUE)
			{
				if ($this->pegawai_model->insert() == TRUE) {
					$data['notif'] = 'Tambah Pegawai Berhasil';
					$data['main_view'] = 'pegawai/add_pegawai_view';
					$this->load->view('template', $data);
				} else {
					$data['notif'] = 'Tambah Pegawai Gagall';
					$data['main_view'] = 'pegawai/add_pegawai_view';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'pegawai/add_pegawai_view';
				$this->load->view('template', $data);
			}
		}
	}

	public function hapus_pegawai()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$id_pegawai = $this->uri->segment(3);

			if ($this->pegawai_model->delete($id_pegawai) == TRUE) {
				redirect('pegawai/data_pegawai');
			} else {
				redirect('pegawai/data_pegawai');
			}
		} else {
			redirect('login');
		}
	}

	public function update_pegawai()
	{

		$id_pegawai = $this->uri->segment(3);
			
		if ($this->input->post('edit')) {

			$this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('telp_pegawai', 'No. Telepon', 'trim|required|numeric');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');

			if($this->form_validation->run() == TRUE)
			{
				if ($this->pegawai_model->update($id_pegawai) == TRUE) {
					$data['notif'] = 'Edit Pegawai Berhasil';
					redirect('pegawai/data_pegawai');
				} else {
					$data['notif'] = 'Edit Pegawai Gagall';
					$data['main_view'] = 'pegawai/edit_pegawai_view';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'pegawai/edit_pegawai_view';
				$this->load->view('template', $data);
			}
		}
	}

}

/* End of file pegawai.php */
/* Location: ./application/controllers/pegawai/pegawai.php */