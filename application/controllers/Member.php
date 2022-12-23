<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->model('member_model');
	}

	
	public function index() {
		
        $this->data['title'] = 'Membership';
		$this->data['member'] = $this->member_model->getDataMember();
		$this->load->view('member/member_list', $this->data);
	}

	public function add(){
		$this->data['title']='Tambah Member';
		$this->load->view('member/member_add', $this->data);
	}

	public function add_save(){
		$data = array(
			'nama_member' => $this->input->post('nama_member'),
			'total_point' => $this->input->post('total_point'),
			'no_hp' => $this->input->post('no_hp'),			
		);

		$simpan = $this->member_model->simpanData($data);

		if($simpan){
			redirect('member');
		}
	}

	public function edit($id_member ){
		$this->data['title'] = 'Edit Member';
		$this->data['member'] = $this->member_model->findData($id_member );

		$this->load->view('member/member_edit',$this->data);
	}

	public function edit_save(){

		$id_member = $this->input->post("id_member");
		$data = array(
			'nama_member' => $this->input->post('nama_member'),
			'total_point' => $this->input->post('total_point'),
			'no_hp' => $this->input->post('no_hp'),			
		);

		$update = $this->member_model->updateData($data,$id_member);

		if($update){
			redirect('member');
		}
	}

	public function hapus($id_member){
		$del = $this->member_model->deleteData($id_member);
		if($del){
			redirect('member');
		}
	}
}
?>