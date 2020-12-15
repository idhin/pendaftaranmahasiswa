<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daerah_model', 'daerah');
		$this->load->database();
	}
	public function index()
	{
		$this->load->view('landingpage/index');
	}

	function pendaftaran()
	{
		$data['provinsi'] = $this->daerah->getProv();
		// print_r($data);
		// die;
		$this->load->view('akun/daftar', $data);
	}
}
