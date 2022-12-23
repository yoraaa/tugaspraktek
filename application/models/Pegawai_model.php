<?php
defined('BASEPATH') OR exit('Not allowed access');

class Pegawai_model extends CI_Model{

    public function getDataPegawai(){
        $this->db->order_by('id_pegawai','DESC');
        $data = $this->db->get('pegawai')->result();
        return $data;
    }

    public function simpanData($data){
        $this->db->insert('pegawai',$data);
        return $this;
        
    }

    public function findData($id_pegawai){
        $this->db->where('id_pegawai',$id_pegawai);
        $data = $this->db->get('pegawai')->row();
        return $data;
    }

    public function deleteData($id_pegawai){
        $this->db->where('id_pegawai',$id_pegawai);
        $this->db->delete('pegawai');
        return $this;
    }
}

?>