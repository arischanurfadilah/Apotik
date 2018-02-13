<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$data = array('ID_SUPPLIER' => $this->input->post('id_supplier'),
				  'NAMA_SUPPLIER' => $this->input->post('nama_supplier'),
				  'ALAMAT_SUPPLIER' => $this->input->post('alamat_supplier'),
				  'KOTA_SUPPLIER' => $this->input->post('kota_supplier'),
				  'TELP_SUPPLIER' => $this->input->post('telp_supplier') 
				  );

		$this->db->insert('supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_supplier()
	{
		return $this->db->order_by('ID_SUPPLIER', 'ASC')
						->get('supplier')
						->result();
	}

	public function get_data_byID($id_supplier)
	{
		return $this->db->where('id_supplier', $id_supplier)
							->get('supplier')
							->row();


	}

	public function delete($id_supplier)
	{
		$this->db->where('ID_SUPPLIER', $id_supplier)
				->delete('supplier');

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update($id_supplier)
	{
		$data = array('ID_SUPPLIER' => $this->input->post('id_supplier'),
				  	'NAMA_SUPPLIER' => $this->input->post('nama_supplier'),
				  	'ALAMAT_SUPPLIER' => $this->input->post('alamat_supplier'),
				  	'KOTA_SUPPLIER' => $this->input->post('kota_supplier'),
				  	'TELP_SUPPLIER' => $this->input->post('telp_supplier') 
				  	);

		$this->db->where('id_supplier', $id_supplier)
				->update('supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file supplier_model.php */
/* Location: ./application/models/supplier_model.php */