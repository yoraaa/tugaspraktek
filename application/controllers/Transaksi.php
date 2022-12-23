<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->model('transaksi_model');
	}

	
	public function index() {
		
      
        $data['barang'] = $this->transaksi_model->getBarang() ;
		$this->load->view('transaksi/list_transaksi', $data);
	}

	public function add(){
		$this->data['title']='Tambah Kasir';
		$this->load->view('pegawai/pegawai_add', $this->data);
	}

	public function add_save(){
        $id_barang = $this->transaksi_model->findData('Susu Beruang') ;
		$data = array(
			'kode_barang' => $this->input->post($id_barang->kode_barang),
			'jumlah_barang' => $this->input->post('jumlah_barang'),
			
		);

		$simpan = $this->transaksi_model->simpanData($data);

		if($simpan){
			redirect('transaksi');
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