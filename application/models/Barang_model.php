<?php
defined('BASEPATH') OR exit('Not allowed access');

class Barang_model extends CI_Model{

    public function getDataBarang(){
        $this->db->order_by('kode_barang','DESC');
        $data = $this->db->get('barang')->result();
        return $data;
    }

    public function simpanData($data){
        $this->db->insert('barang',$data);
        return $this;
        
    }

    public function findData($kode_barang){
        $this->db->where('kode_barang',$kode_barang);
        $data = $this->db->get('barang')->row();
        return $data;
    }

    public function updateData($data, $kode_barang){
        $this->db->where('kode_barang', $kode_barang);
        $this->db->update('barang', $data);
        return $this;
    }

    public function deleteData($kode_barang){
        $this->db->where('kode_barang',$kode_barang);
        $this->db->delete('barang');
        return $this;
    }
}

?>