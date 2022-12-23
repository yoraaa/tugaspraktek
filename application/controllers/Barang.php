<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->model('barang_model');
	}

	
	public function index() {
		
        $this->data['title'] = 'barang';
		$this->data['barang'] = $this->barang_model->getDataBarang();
		$this->load->view('barang/barang_list', $this->data);
	}

	public function add(){
		$this->data['title']='Tambah barang';
		$this->load->view('barang/barang_add', $this->data);
	}

	public function add_save(){
		$data = array(
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'stok' => $this->input->post('stok'),
			
		);

		$simpan = $this->barang_model->simpanData($data);

		if($simpan){
			redirect('barang');
		}
	}

	public function edit($kode_barang){
		$this->data['title'] = 'Edit Data';
		$this->data['barang'] = $this->barang_model->findData($kode_barang);

		$this->load->view('barang/barang_edit',$this->data);
	}

	public function edit_save(){

		$kode_barang = $this->input->post("kode_barang");
		$data = array(
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'stok' => $this->input->post('stok'),
		);

		$update = $this->barang_model->updateData($data,$kode_barang);

		if($update){
			redirect('barang');
		}
	}

	public function hapus($kode_barang){
		$del = $this->barang_model->deleteData($kode_barang);
		if($del){
			redirect('barang');
		}
	}
}
?>