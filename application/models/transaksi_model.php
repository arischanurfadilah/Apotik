<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_pegawai()
	{
		return $this->db->select('ID_PEGAWAI')
						->get('pegawai')
						->row();
	}

	public function dropdown_obat()
	{
		return $this->db->select('ID_OBAT, NAMA_OBAT')
						->get('obat')
						->result();
	}

	public function jual()
	{
		$data = array('ID_TRANSAKSI' => $this->input->post('id_transaksi'),
				  'ID_PEGAWAI' => $this->input->post('pegawai'),
				  'ID_OBAT' => $this->input->post('obat'),
				  'NAMA_PEMBELI' => $this->input->post('nama_pembeli'),
				  'TGL_TRANS' => $this->input->post('tgl_trans'), 
				  'QTY' => $this->input->post('qty')
				  );

		$this->db->insert('transaksi', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getStock($id_obat)
	{
		$query = $this->db->where('ID_OBAT', $id_obat)
						->get('obat')
						->row();
		return $query->STOCK;
	}

	public function kurangi($id_obat, $kurangi)
	{
		$data = array('STOCK' => $kurangi );
		$this->db->where('ID_OBAT', $id_obat)
				->update('obat', $data);
	}

	public function getHarga($id_obat)
	{
		$query = $this->db->where('ID_OBAT', $id_obat)
						->get('obat')
						->row();
		return $query->HARGA;
	}

	public function get_laporan()
	{
		$sql = "SELECT * FROM obat natural join transaksi natural join pegawai natural join supplier";
		return $this->db->query($sql)
						->result();

	}

}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */