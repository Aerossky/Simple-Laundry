<?php

class Outlet extends CI_Controller
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
        $data['outlet'] = $this->Utama_model->tampil_data("tb_outlet")->result();
        $this->load->view('admin/outlet', $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_data()
    {
        if ($this->session->userdata("role") == "admin") {
        $this->load->view('partials/header');
        $this->load->view('admin/tambahoutlet');
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_aksi()
    { if ($this->session->userdata("role") == "admin") {
        $nama = $this->input->post("nm");
        $alamat = $this->input->post("al");
        $telp = $this->input->post("nt");

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tlp' => $telp
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di tambahkan!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        $this->Utama_model->input_data($data, 'tb_outlet');
        redirect('hadmin/Outlet');
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function hapus_data($id)
    {if ($this->session->userdata("role") == "admin") {
        $where = array(
            'id_outlet' => $id
        );
        $this->Utama_model->delete($where, 'tb_outlet');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil di hapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect('hadmin/Outlet');
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function edit_data($id)
    {if ($this->session->userdata("role") == "admin") {
        $where = array(
            'id_outlet' => $id
        );
        $this->load->view("partials/header");
        $data['outlet1'] = $this->Utama_model->edit_data($where, 'tb_outlet')->result();
        $this->load->view("admin/editoutlet", $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function update()
    {if ($this->session->userdata("role") == "admin") {
        $id = $this->input->post("id");
        $nama = $this->input->post("nm");
        $alamat = $this->input->post("al");
        $tlp = $this->input->post("nt");


        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tlp' => $tlp,

        );

        $where = array(
            'id_outlet' => $id,
        );

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di edit!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        $this->Utama_model->update($where, $data, 'tb_outlet');
        redirect("hadmin/outlet");
        } else {
            redirect('welcome', 'refresh');
        }
    }
}
