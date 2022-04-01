<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    function index()
    {
        $this->load->view('halaman_beranda');
    }
    function akun()
    {
        $data = array(
            'title'         => 'Judul halaman',
            'nama_lengkap'  => 'Soekarno',
            'alamat'        => 'Jakarta'
        );

        $this->load->view('halaman_akun',$data);
    }
    function akun_dari_model()
    {
        $this->load->model('ModelAkun');
        $data = $this->ModelAkun->getArrayAkun();
        $this->load->view('halaman_akun',$data);
    }
    function akun_dari_db()
    {
        $this->load->model('ModelAkun');
        $data = array(
            'title'     => 'Judul halaman',
            'pengguna'  => $this->ModelAkun->getDBAkun()->result()
        );
        $this->load->view('daftar_akun',$data);
    }
}