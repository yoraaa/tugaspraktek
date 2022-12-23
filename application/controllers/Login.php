<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $cekuserdaftar = $this->Login_model->cekuserdaftar($username);
        if($cekuserdaftar){

            $ceklogin = $this->Login_model->ceklogin($username,$password);
            if($ceklogin){
                foreach($ceklogin as $row){
                        $data = array(
                            'title' => "Ecommerce Dashboard"
                        );
                        $this->load->view('dist/index', $data);
                    
                }
            }else{
                echo "<script>alert('Username atau Password yang anda masukan salah.');</script>";
                redirect('Login','refresh');
            }
        }else{
            echo "<script>alert('Username belum terdaftar.');</script>";
                redirect('Login','refresh');
        }
    }
}