<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('obat_model');
	}

	public function data_obat()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {
			$data['data'] = $this->obat_model->get_data_obat();
			$data['main_view'] = 'obat/data_obat_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function data_obat_kasir()
	{
		if ($this->session->userdata('logged_in') == TRUE  && $this->session->userdata('JABATAN') == 'kasir') {
			$data['data'] = $this->obat_model->get_data_obat();
			$data['main_view'] = 'obat/obat_pegawai_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function edit_obat()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {
			$id_obat = $this->uri->segment(3);
			$data['data'] = $this->obat_model->get_data_byID($id_obat);
			$data['supplier'] = $this->obat_model->dropdown_supplier();
			$data['main_view'] = 'obat/edit_obat_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}
	public function add_obat()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {

			$idacak = rand(100, 999);
			$id = 'OBAT'.$idacak;
			$data['id_acak'] = $id;

			$data['supplier'] = $this->obat_model->dropdown_supplier();
			$data['main_view'] = 'obat/add_obat_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function simpan_obat()
	{

		if($this->input->post('submit')) {

		$this->form_validation->set_rules('id_obat', 'ID Obat', 'trim|required');
		$this->form_validation->set_rules('supplier', 'supplier', 'trim|required');
		$this->form_validation->set_rules('nama_obat', 'Nama Obat', 'trim|required');
		$this->form_validation->set_rules('produsen', 'Produsen', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
		$this->form_validation->set_rules('stock', 'stock', 'trim|required');

		$idacak = rand(100, 999);
		$id = 'OBAT'.$idacak;
		$data['id_acak'] = $id;
		$data['supplier'] = $this->obat_model->dropdown_supplier();

		if($this->form_validation->run() == TRUE)
		{
			
			$config['upload_path'] = './foto/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '5000';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if ($this->obat_model->insert($this->upload->data()) == TRUE) {
					
					$data['notif'] = 'Tambah Obat Berhasil';
					$data['main_view'] = 'obat/add_obat_view';
					$this->load->view('template', $data);
				} else {
					$data['notif'] = 'Tambah Obat Gagall';
					$data['main_view'] = 'add_obat_view';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = $this->upload->display_errors();
				$data['main_view'] = 'obat/add_obat_view';
				$this->load->view('template', $data);
			}
		} else {
			$data['notif'] = validation_errors();
			$data['main_view'] = 'obat/add_obat_view';
			$this->load->view('template', $data);
		}
		}
	}

	public function update_obat()
	{
		$id_obat = $this->uri->segment(3);

		$idacak = rand(100, 999);
		$id = 'OBAT'.$idacak;
		$data['id_acak'] = $id;
		$data['supplier'] = $this->obat_model->dropdown_supplier();
		$data['data'] = $this->obat_model->get_data_byID($id_obat);

		if($this->input->post('edit')) {

		$this->form_validation->set_rules('id_obat', 'ID Obat', 'trim|required');
		$this->form_validation->set_rules('supplier', 'supplier', 'trim|required');
		$this->form_validation->set_rules('nama_obat', 'Nama Obat', 'trim|required');
		$this->form_validation->set_rules('produsen', 'Produsen', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
		$this->form_validation->set_rules('stock', 'stock', 'trim|required');

		if($this->form_validation->run() == TRUE)
		{
				$config['upload_path'] = './foto/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = '5000';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					if ($this->obat_model->update($this->uri->segment(3), $this->upload->data()) == TRUE) {
						redirect('obat/data_obat');
					} else {
						$data['notif'] = 'Pembaruan Gagal';
						$data['main_view'] = 'obat/edit_obat_view';
						$this->load->view('template', $data);
					}
				}  else {
					$data['notif'] = $this->upload->display_errors();
					$data['main_view'] = 'obat/edit_obat_view';
					$this->load->view('template', $data);
				}
		} else {
			$data['notif'] = validation_errors();
			$data['main_view'] = 'obat/edit_obat_view';
			$this->load->view('template', $data);
		}
		}
	}

	public function hapus_obat()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->obat_model->delete($this->uri->segment(3)) == TRUE) {
				redirect('obat/data_obat');
			} else {
				redirect('obat/data_obat');
			}
		} else {
			redirect('login');
		}
	}

	public function lihat_obat()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$id_obat = $this->uri->segment(3);
			$data['data'] = $this->obat_model->get_data_byID($id_obat);
			$data['supplier'] = $this->obat_model->nama_supplier();
			$data['main_view'] = 'obat/lihat_obat_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */