<?php
defined('BASEPATH') OR exit('Not allowed access');

class Member_model extends CI_Model{

    public function getDatamember(){
        $this->db->order_by('id_member','DESC');
        $data = $this->db->get('member')->result();
        return $data;
    }

    public function simpanData($data){
        $this->db->insert('member',$data);
        return $this;
        
    }

    public function findData($id_member){
        $this->db->where('id_member',$id_member);
        $data = $this->db->get('member')->row();
        return $data;
    }

    public function updateData($data, $id_member){
        $this->db->where('id_member', $id_member);
        $this->db->update('member', $data);
        return $this;
    }

    public function deleteData($id_member){
        $this->db->where('id_member',$id_member);
        $this->db->delete('member');
        return $this;
    }
}

?>