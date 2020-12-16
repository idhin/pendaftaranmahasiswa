<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Daerah_model', 'daerah');
        $this->load->model('Account', 'akun');
        // $this->load->library('form_validation');
    }
    public function admin()
    {
        $this->load->view('akun/login');
    }

    function prosesMasuk()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($email == "admin@ithb.ac.id" && $password == "123") {
            $this->session->set_userdata('admin', 'adminBerhasilLogin');
            redirect('akun/kontrol');
        } else {
            echo '<script>alert("Maaf, email/password salah")</script>';
            echo '<script>window.location.href="' . base_url() . 'akun/admin";</script>';
        }
    }

    function kontrol()
    {
        if ($this->session->userdata('admin') != 'adminBerhasilLogin') {
            echo '<script>alert("Maaf, anda tidak diizinkan mengakses halaman ini")</script>';
            echo '<script>window.location.href="' . base_url() . '";</script>';
        } else {
            $totalMahasiswa = count($this->akun->getAllMahasiswa());
            $data['totalMhs'] = $totalMahasiswa;
            $data['mahasiswa'] = $this->akun->getLimaMahasiswa();
            $this->load->view('admin/header');
            $this->load->view('admin/index', $data);
            $this->load->view('admin/footer');
        }
    }


    function kontrolMahasiswa()
    {
        if ($this->session->userdata('admin') != 'adminBerhasilLogin') {
            echo '<script>alert("Maaf, anda tidak diizinkan mengakses halaman ini")</script>';
            echo '<script>window.location.href="' . base_url() . '";</script>';
        } else {
            $data['mahasiswa'] = $this->akun->getAllMahasiswa();
            $this->load->view('admin/header');
            $this->load->view('admin/kontrolMahasiswa', $data);
            $this->load->view('admin/footer');
        }
    }

    function keluar()
    {
        $this->session->sess_destroy();
        echo '<script>alert("Berhasil keluar")</script>';
        echo '<script>window.location.href="' . base_url() . '";</script>';
    }
}
