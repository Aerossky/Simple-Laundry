<?php

class Kpaket extends CI_Controller
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
        $this->load->view('partials/header');
        $data['kategori'] = $this->Utama_model->tampil_data("tb_kategori")->result();
        $this->load->view('admin/kpaket', $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_data()
    {if ($this->session->userdata("role") == "admin") {
        $this->load->view("partials/header");
        $this->load->view("admin/tambahkpaket");
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_aksi()
    {if ($this->session->userdata("role") == "admin") {
        $nama = $this->input->post("nm");

        $data = array(
            'jenis' => $nama
        );
        $this->Utama_model->input_data($data, 'tb_kategori');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di tambahkan!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        redirect('hadmin/Kpaket');
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function hapus($id)
    {if ($this->session->userdata("role") == "admin") {
        $where = array(
            'id' => $id
        );
        $this->Utama_model->delete($where, 'tb_kategori');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil di hapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect('hadmin/Kpaket');
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function edit_data($id)
    {if ($this->session->userdata("role") == "admin") {
        $where = array(
            'id' => $id
        );
        $this->load->view("partials/header");
        $data['kategori1'] = $this->Utama_model->edit_data($where, 'tb_kategori')->result();
        $this->load->view("admin/editkpaket", $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function update()
    {if ($this->session->userdata("role") == "admin") {
        $id = $this->input->post("id");
        $nama = $this->input->post("nm");

        $data = array(
            'jenis' => $nama,


        );

        $where = array(
            'id' => $id,
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di edit!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        $this->Utama_model->update($where, $data, 'tb_kategori');
        redirect("hadmin/Kpaket");
        } else {
            redirect('welcome', 'refresh');
        }
    }
}
