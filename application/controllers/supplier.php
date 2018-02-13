<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
	}

	public function data_supplier()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {
			$data['data'] = $this->supplier_model->get_data_supplier();
			$data['main_view'] = 'supplier/data_supplier_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function add_supplier()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {

			$idacak = rand(100, 999);
			$id = 'SUPPLY'.$idacak;
			$data['id_acak'] = $id;

			$data['main_view'] = 'supplier/add_supplier_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function edit_supplier()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('JABATAN') == 'admin') {
			$id_supplier = $this->uri->segment(3);
			$data['o'] = $this->supplier_model->get_data_byID($id_supplier);
			$data['main_view'] = 'supplier/edit_supplier_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function simpan_supplier()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('id_supplier', 'ID Supplier', 'trim|required');
			$this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'trim|required');
			$this->form_validation->set_rules('alamat_supplier', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('kota_supplier', 'Kota', 'trim|required');
			$this->form_validation->set_rules('telp_supplier', 'No. Telepon', 'trim|required|numeric');

			$idacak = rand(100, 999);
			$id = 'SUPPLY'.$idacak;
			$data['id_acak'] = $id;

			if($this->form_validation->run() == TRUE)
			{
				if ($this->supplier_model->insert() == TRUE) {
					$data['notif'] = 'Tambah Supplier Berhasil';
					$data['main_view'] = 'supplier/add_supplier_view';
					$this->load->view('template', $data);
				} else {
					$data['notif'] = 'Tambah Supplier Gagall';
					$data['main_view'] = 'supplier/add_supplier_view';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'supplier/add_supplier_view';
				$this->load->view('template', $data);
			}
		}
	}

	public function hapus_supplier()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$id_supplier = $this->uri->segment(3);

			if ($this->supplier_model->delete($id_supplier) == TRUE) {
				redirect('supplier/data_supplier');
			} else {
				redirect('supplier/data_supplier');
			}
		} else {
			redirect('login');
		}
	}

	public function update_supplier()
	{

		$id_supplier = $this->uri->segment(3);
			
		if ($this->input->post('edit')) {

			$this->form_validation->set_rules('id_supplier', 'ID Supplier', 'trim|required');
			$this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'trim|required');
			$this->form_validation->set_rules('alamat_supplier', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('kota_supplier', 'Kota', 'trim|required');
			$this->form_validation->set_rules('telp_supplier', 'No. Telepon', 'trim|required|numeric');

			if($this->form_validation->run() == TRUE)
			{
				if ($this->supplier_model->update($id_supplier) == TRUE) {
					$data['notif'] = 'Edit Supplier Berhasil';
					redirect('supplier/data_supplier');
				} else {
					$data['notif'] = 'Edit Supplier Gagall';
					$data['main_view'] = 'supplier/edit_supplier_view';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'supplier/edit_supplier_view';
				$this->load->view('template', $data);
			}
		}
	}

}

/* End of file supplier.php */
/* Location: ./application/controllers/supplier.php */