<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function cekuserdaftar($username)
    {
        $query = $this->db->query("SELECT * FROM pegawai WHERE username='$username'");

        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function ceklogin($username,$password){
        $query = $this->db->query("SELECT * FROM pegawai WHERE username='$username' and password='$password' ");
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }
}