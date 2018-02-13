<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function cek_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
							->where('password', $password)
							->get('pegawai');

		if ($query->num_rows() > 0 ) {
			$data = array('username' => $username,
							'NAMA_PEGAWAI' => $query->row()->NAMA_PEGAWAI,
							'ID_PEGAWAI' => $query->row()->ID_PEGAWAI,
							'JABATAN' => $query->row()->JABATAN,
							'logged_in' => TRUE );

			$this->session->set_userdata($data);

			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */