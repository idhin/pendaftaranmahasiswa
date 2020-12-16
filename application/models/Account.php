<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Model
{
    public function index()
    {
        $this->load->view('landingpage/index');
    }

    function daftarMahasiswa($data)
    {
        $this->db->insert('mahasiswa', $data);
    }

    function getAllMahasiswa()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        return $this->db->get()->result();
    }
    function getLimaMahasiswa()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->order_by('createdAt', 'desc');
        $this->db->limit(5);

        return $this->db->get()->result();
    }

    function get()
    {
        $this->load->view('akun/daftar');
    }
}
