<?php


class Pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Utama_model");
        if ($this->session->userdata('role') == null) {
            redirect('welcome');
        }
    }

    function index()
    {
        $this->load->view("partials/header");
        $data["pelanggan"] = $this->Utama_model->tampil_data("tb_member")->result();
        $this->load->view("admin/pelanggan", $data);
    }

    function tambah_data()
    {
        $this->load->view("partials/header");
        $this->load->view("admin/tambahpelanggan");
    }

    function tambah_aksi()
    {
        $nama = $this->input->post("nm");
        $alamat = $this->input->post("al");
        $jenis = $this->input->post("jk");
        $telp = $this->input->post("nt");

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis,
            'tlp' => $telp
        );


        $this->Utama_model->input_data($data, 'tb_member');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di tambahkan!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        redirect('hadmin/pelanggan');
    }



    function hapus_data($id)
    {
        $where = array(
            'id_m' => $id
        );
        $this->Utama_model->delete($where, 'tb_member');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil di hapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect('hadmin/Pelanggan');
    }

    function edit_data($id)
    {
        $where = array(
            'id_m' => $id
        );
        $this->load->view("partials/header");
        $data['pelanggan1'] = $this->Utama_model->edit_data($where, 'tb_member')->result();
        $this->load->view("admin/editpelanggan", $data);
    }

    function update()
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nm");
        $alamat = $this->input->post("al");
        $jenis = $this->input->post("jk");
        $telp = $this->input->post("nt");

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis,
            'tlp' => $telp
        );
        $where = array(
            'id_m' => $id
        );
        $this->Utama_model->update($where, $data, 'tb_member');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di edit!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        return redirect('hadmin/Pelanggan');
    }
}
