<?php

class MahasiswaController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MahasiswaModel');
	}

	public function response($data)
	{
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($data))
					->_display();
		exit;
	}

	public function get_mahasiswa()
	{
		$data = $this->MahasiswaModel->get_mahasiswa();

		return $this->response([
			"error"		=> false,
			"message"	=> "Data tersedia ...",
			"mahasiswa"		=> $data
		]);
	}
}