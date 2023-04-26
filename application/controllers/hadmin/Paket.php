<?php

class Paket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Utama_model');
        if ($this->session->userdata("role") == null) {
            redirect('welcome', 'refresh');
        }
    }
    function index()
    {
        if ($this->session->userdata("role") == "admin") {
        $this->load->view("partials/header");
        $data['paket'] = $this->Utama_model->tampil_data("tb_paket")->result();
        $this->load->view("admin/paket", $data);
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_data()
    {if ($this->session->userdata("role") == "admin") {
        $this->load->view('partials/header');
        $data['kategori'] = $this->Utama_model->tampil_data("tb_kategori")->result();
        $this->load->view('admin/tambahpaket', $data);
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_aksi()
    {if ($this->session->userdata("role") == "admin") {
        $namak = $this->input->post("nk");
        $namap = $this->input->post("np");
        $harga = $this->input->post("ha");

        $data = array(
            'nama_kategori' => $namak,
            'nama_paket' => $namap,
            'harga' => $harga
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di tambahkan!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        $this->Utama_model->input_data($data, 'tb_paket');
        redirect('hadmin/Paket');
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function hapus_data($id)
    {if ($this->session->userdata("role") == "admin") {
        $where = array(
            'id_paket' => $id
        );
        $this->Utama_model->delete($where, 'tb_paket');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil di hapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect('hadmin/Paket');
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function edit_data($id)
    {if ($this->session->userdata("role") == "admin") {
        $where = array(
            'id_paket' => $id
        );
        $this->load->view("partials/header");
        $data['kategori1'] = $this->Utama_model->tampil_data("tb_kategori")->result();
        $data['paket1'] = $this->Utama_model->edit_data($where, 'tb_paket')->result();
        $this->load->view("admin/editpaket", $data);
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function update()
    {if ($this->session->userdata("role") == "admin") {
        $id    = $this->input->post('id');
        $namak = $this->input->post("nk");
        $namap = $this->input->post("np");
        $harga = $this->input->post("ha");

        $data = array(
            'nama_kategori' => $namak,
            'nama_paket' => $namap,
            'harga' => $harga
        );

        $where = array(
            'id_paket' => $id,
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di edit!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        $this->Utama_model->update($where, $data, 'tb_paket');
        redirect("hadmin/paket");
         } else {
            redirect('welcome', 'refresh');
        }
    }
}
