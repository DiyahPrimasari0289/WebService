<?php

class MahasiswaModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_mahasiswa()
	{
		$data = $this->db->get('mahasiswa')->result();
		return $data;
	}
}