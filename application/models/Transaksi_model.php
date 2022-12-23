<?php
defined('BASEPATH') OR exit('Not allowed access');

class Transaksi_model extends CI_Model{

    public function getBarang(){
        $this->db->order_by('nama_barang','DESC');
        $data = $this->db->get('barang')->result();
        return $data;
    }

    public function simpanData($data){
        $this->db->insert('transaksi',$data);
        return $this;
        
    }

    public function findData($nama_barang){
        $query = $this->db->query("SELECT kode_barang FROM barang WHERE nama_barang='$nama_barang' ");
        return $query->result_array();
    }

    public function deleteData($id_pegawai){
        $this->db->where('id_pegawai',$id_pegawai);
        $this->db->delete('pegawai');
        return $this;
    }
}

?>