<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->model('pegawai_model');
	}

	
	public function index() {
		
        $this->data['title'] = 'Pegawai';
		$this->data['pegawai'] = $this->pegawai_model->getDataPegawai();
		$this->load->view('pegawai/pegawai_list', $this->data);
	}

	public function add(){
		$this->data['title']='Tambah Kasir';
		$this->load->view('pegawai/pegawai_add', $this->data);
	}

	public function add_save(){
		$data = array(
			'id_pegawai' => $this->input->post('id_pegawai'),
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp'),
            'password' => md5('Kasirku'),
            'role' =>'Kasir',
			
		);

		$simpan = $this->pegawai_model->simpanData($data);

		if($simpan){
			redirect('pegawai');
		}
	}

	

	public function hapus($id_pegawai){
		$del = $this->pegawai_model->deleteData($id_pegawai);
		if($del){
			redirect('pegawai');
		}
	}
}
?>