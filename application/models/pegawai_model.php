<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$data = array('ID_PEGAWAI' => $this->input->post('id_pegawai'),
				  'USERNAME' => $this->input->post('username'),
				  'PASSWORD' => $this->input->post('password'),
				  'NAMA_PEGAWAI' => $this->input->post('nama_pegawai'),
				  'ALAMAT' => $this->input->post('alamat'), 
				  'TELP_PEGAWAI' => $this->input->post('telp_pegawai'),
				  'JABATAN' => $this->input->post('jabatan')
				  );

		$this->db->insert('pegawai', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_pegawai()
	{
		return $this->db->order_by('JABATAN', 'ASC')
						->get('pegawai')
						->result();
	}

	public function delete($id_pegawai)
	{
		$this->db->where('ID_PEGAWAI', $id_pegawai)
				->delete('pegawai');

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_byID($id_pegawai)
	{
		return $this->db->where('ID_PEGAWAI', $id_pegawai)
							->get('pegawai')
							->row();
	}

	public function update($id_pegawai)
	{
		$data = array('ID_PEGAWAI' => $this->input->post('id_pegawai'),
				  	'USERNAME' => $this->input->post('username'),
				  	'PASSWORD' => $this->input->post('password'),
				  	'NAMA_PEGAWAI' => $this->input->post('nama_pegawai'),
				  	'ALAMAT' => $this->input->post('alamat'),
				  	'TELP_PEGAWAI' => $this->input->post('telp_pegawai'),
				  	'JABATAN' => $this->input->post('jabatan')
				  	);

		$this->db->where('id_pegawai', $id_pegawai)
				->update('pegawai', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */