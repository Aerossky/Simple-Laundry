<?php

class Pengaturanp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Utama_model');

        if ($this->session->userdata("role") == null) {
            redirect('welcome');
        }
    }



    public function index()
    {
        $this->load->view("partials/header");
        $this->load->view("admin/Pengaturanp");
    }

    function ganti_pass()
    {
        $pass_baru = $this->input->post("pass_baru");
        $ulang_pass = $this->input->post("ulang_pass");

        $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
        $this->form_validation->set_rules('ulang_pass', 'Ulang Password Baru', 'required');

        if ($this->form_validation->run() != false) {
            $data = array(
                'password' => MD5($pass_baru)
            );
            $w = array(
                'id' => $this->session->userdata('id')
            );
            $this->Utama_model->update($w, $data, 'tb_user');
            redirect(
                base_url("hadmin/pengaturanp?pesan=berhasil")
            );
        } else {
            $this->load->view("partials/header");
            $this->load->view("admin/Pengaturanp");
        }
    }
}



