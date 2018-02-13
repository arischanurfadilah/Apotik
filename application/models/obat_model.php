<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function dropdown_supplier()
	{
		return $this->db->select('ID_SUPPLIER, NAMA_SUPPLIER')
						->get('supplier')
						->result();
	}

	public function insert($foto)
	{
		$data = array('ID_OBAT' => $this->input->post('id_obat'),
						'ID_SUPPLIER' => $this->input->post('supplier'),
						'NAMA_OBAT' => $this->input->post('nama_obat'),
						'PRODUSEN' => $this->input->post('produsen'),
						'STOCK' => $this->input->post('stock'),
						'HARGA' => $this->input->post('harga'),
						'FOTO' => $foto['file_name'] 
						);

		$this->db->insert('obat', $data);

		if ($this->db->affected_rows() > 0 ) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_byID($id_obat)
	{
		return $this->db->where('ID_OBAT', $id_obat)
							->get('obat')
							->row();
	}

	public function update($id_obat, $foto)
	{
		$path = './foto/'.$this->input->post('nama_foto');
		unlink($path);

		$data = array('ID_OBAT' => $this->input->post('id_obat'),
						'ID_SUPPLIER' => $this->input->post('supplier'),
						'NAMA_OBAT' => $this->input->post('nama_obat'),
						'PRODUSEN' => $this->input->post('produsen'),
						'STOCK' => $this->input->post('stock'),
						'HARGA' => $this->input->post('harga'),
						'FOTO' => $foto['file_name'] 
				  	);

		$this->db->where('id_obat', $id_obat)
				->update('obat', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_obat()
	{
		$sql = "SELECT * from supplier natural join obat";
		return $this->db->query($sql)
						->result();
	}

	public function delete($id_obat)
	{
		// $query = $this->db->where('ID_OBAT', $id_obat)
		// 				->get('obat')
		// 				->row();
		
		return $this->db->where('ID_OBAT', $id_obat)
				->delete('obat');

		// $path = './foto/'.$query->FOTO;
		// unlink($path);

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function nama_supplier()
	{
		return $this->db->select('NAMA_SUPPLIER')
						->get('supplier')
						->row();
	}

}

/* End of file obat_model.php */
/* Location: ./application/models/obat_model.php */