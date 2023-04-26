<?php

class Utama extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if(
            $this->session->userdata("role") == null ){
            redirect('welcome');
        }
    }
    function index(){
        $member = $this->db->query("SELECT * FROM tb_member");
        $baru = $this->db->query("SELECT * FROM tb_transaksi WHERE status='baru'");
        $proses = $this->db->query("SELECT * FROM tb_transaksi WHERE status='proses'");
        $ambil = $this->db->query("SELECT * FROM tb_transaksi WHERE status='diambil'");
        $selesai = $this->db->query("SELECT * FROM tb_transaksi WHERE status='selesai'");
        
        
        
        
        $data['member'] = $member->num_rows();
        $data['baru'] = $baru->num_rows();
        $data['proses'] = $proses->num_rows();
        $data['ambil'] = $ambil->num_rows();
        $data['selesai'] = $selesai->num_rows();
       $this->load->view('partials/header');
       $this->load->view('admin/dashboard',$data);
   }
}