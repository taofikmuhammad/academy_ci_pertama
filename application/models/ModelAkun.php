<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAkun extends CI_Controller {
    function getArrayAkun()
    {
        $data_akun = array(
            'title'        => 'Data dari Model',
            'nama_lengkap' => 'Soeharto',
            'alamat'       => 'Jakarta'
        );

        return $data_akun;
    }
    function getDBAkun()
    {
        return $this->db->get('pengguna');       
    }
}