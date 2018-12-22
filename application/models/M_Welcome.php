<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Welcome extends CI_Model {

	public function cekLogin($data){
        $this->db->where($data);
        return $this->db->get('user');
    }


    public function daftar($data){
        return $this->db->insert('user', $data);
    }
}
