<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Model
{
    public function index()
    {
        $this->load->view('landingpage/index');
    }

    function pendaftaran()
    {
        $this->load->view('akun/daftar');
    }
}
