<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$idacak = rand(100, 999);
			$id = 'TRANS'.$idacak;
			$data['id_acak'] = $id;
			$data['obat'] = $this->transaksi_model->dropdown_obat();
			$data['total']='';
			$data['main_view'] = 'transaksi/form_jual_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function do_jual()
	{

			$idacak = rand(100, 999);
			$id = 'TRANS'.$idacak;
			$data['id_acak'] = $id;
			$data['obat'] = $this->transaksi_model->dropdown_obat();
			$data['total']='';

		if ($this->input->post('jual')) {
			$this->form_validation->set_rules('id_transaksi', 'ID Transaksi', 'trim|required');
			$this->form_validation->set_rules('nama_pembeli', 'nama pembeli', 'trim|required');
			$this->form_validation->set_rules('qty', 'quantity', 'trim|required|numeric');

			if($this->form_validation->run() == TRUE)
			{
				$id_obat = $this->input->post('obat');
				$qty = $this->input->post('qty');
				$stock = $this->transaksi_model->getStock($id_obat);

				if ($stock < $qty) {
					$data['notif'] = 'Stock tidak mencukupi';
					$data['main_view'] = 'transaksi/form_jual_view';
					$this->load->view('template', $data);
				} elseif ($qty < 1) {
					$data['notif'] = 'Barang yang dibeli minimal 1';
					$data['main_view'] = 'transaksi/form_jual_view';
					$this->load->view('template', $data);
				} else {
					if ($this->transaksi_model->jual() == TRUE) {					
						$kurangi = $stock-$qty;
						$this->transaksi_model->kurangi($id_obat, $kurangi);

						$harga = $this->transaksi_model->getHarga($id_obat);
						$total = $harga*$qty;
						$data['total']= $total;

						$data['notif'] = 'Transaksi Berhasil';
						$data['main_view'] = 'transaksi/form_jual_view';
						$this->load->view('template', $data);
					} else {
						$data['notif'] = 'Transaksi Gagall';
						$data['main_view'] = 'transaksi/form_jual_view';
						$this->load->view('template', $data);
					}
				}
				
			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'transaksi/form_jual_view';
				$this->load->view('template', $data);
			}
		}
	}

	public function laporan()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['data'] = $this->transaksi_model->get_laporan();
			$data['main_view'] = 'transaksi/laporan_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */