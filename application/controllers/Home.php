<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daerah_model', 'daerah');
		$this->load->model('Account', 'akun');
		$this->load->library('form_validation');
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

	function sukses()
	{
		$this->load->view('akun/sukses');
	}

	function prosesDaftar()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password', true);
		$password2 = $this->input->post('password2');
		$tempat = $this->input->post('tempat');
		$tglLahir = $this->input->post('tglLahir');
		$alamat = $this->input->post('alamat');
		$asalSekolah = $this->input->post('asalSekolah');
		$kodeProp = $this->input->post('prop');
		$provinsi = $this->daerah->getProvinsi($kodeProp);
		$kodeKota = $this->input->post('kota');
		$kota = $this->daerah->getKota($kodeKota);
		$kodeKecamatan = $this->input->post('kec');
		$kecamatan = $this->daerah->getKecamatan($kodeKecamatan);
		$kodeKelurahan = $this->input->post('kel');
		$kelurahan = $this->daerah->getKelurahan($kodeKelurahan);

		$data = [
			'nama' => $nama,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_BCRYPT),
			'tempat' => $tempat,
			'tglLahir' => $tglLahir,
			'alamat' => $alamat,
			'asalSekolah' => $asalSekolah,
			'provinsi' => $provinsi->nama,
			'kota' => $kota->nama,
			'kecamatan' => $kecamatan->nama,
			'kelurahan' => $kelurahan->nama,
			'status' => "Pending"
		];

		$this->akun->daftarMahasiswa($data);

		redirect('home/sukses');

		// print_r($data);
		// die;

		// $this->form_validation->set_rules('nama', 'Nama', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		// $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		// if ($this->form_validation->run() != false) {
		// 	echo "Form validation oke";
		// } else {
		// 	$data['provinsi'] = $this->daerah->getProv();
		// 	$this->load->view('akun/daftar', $data);
		// }
	}
}
