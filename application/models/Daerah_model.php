<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerah_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getProv()
    {
        $sql = "SELECT * FROM provinsi";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getKab($id_prov)
    {
        $sql = "SELECT * FROM kabupaten WHERE id_prov={$id_prov} ORDER BY nama";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getKec($id_kab)
    {
        $sql = "SELECT * FROM kecamatan WHERE id_kab={$id_kab} ORDER BY nama";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getKel($id_kec)
    {
        $sql = "SELECT * FROM kelurahan WHERE id_kec={$id_kec} ORDER BY nama";
        $query = $this->db->query($sql);
        return $query->result();
    }


    public function getProvinsi($kodeProp)
    {
        $this->db->select('nama');
        $this->db->where('id_prov', $kodeProp);
        $this->db->from('provinsi');

        return $this->db->get()->row();
    }

    public function getKota($kodeKota)
    {
        $this->db->select('nama');
        $this->db->where('id_kab', $kodeKota);
        $this->db->from('kabupaten');

        return $this->db->get()->row();
    }

    public function getKecamatan($kodeKecamatan)
    {
        $this->db->select('nama');
        $this->db->where('id_kec', $kodeKecamatan);
        $this->db->from('kecamatan');

        return $this->db->get()->row();
    }

    public function getKelurahan($kodeKelurahan)
    {
        $this->db->select('nama');
        $this->db->where('id_kel', $kodeKelurahan);
        $this->db->from('kelurahan');

        return $this->db->get()->row();
    }
}
