<?php
class Pengguna extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Utama_model");

        if ($this->session->userdata("role") == null) {
            redirect('welcome', 'refresh');
        }
    }


    function index()
    {
        if ($this->session->userdata("role") == "admin") {

            $this->load->view("partials/header");
            $data['pengguna'] = $this->db->query("SELECT * FROM tb_user, tb_outlet WHERE id_o = id_outlet")->result();
            $this->load->view("admin/pengguna", $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_data()
    {
        if ($this->session->userdata("role") == "admin") {

            $this->load->view("partials/header");
            $data['outlet'] = $this->Utama_model->tampil_data("tb_outlet")->result();
            $this->load->view("admin/tambahpengguna", $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_aksi()
    {
        if ($this->session->userdata("role") == "admin") {


            $nama = $this->input->post("nm");
            $username = $this->input->post("un");
            $password = MD5($this->input->post("pw"));
            $jabatan = $this->input->post("jb");
            $status = $this->input->post("stt");
            $outlet = $this->input->post("ot");

            $data = array(
                'nama_user' => $nama,
                'username' => $username,
                'password' => $password,
                'role' => $jabatan,
                'status' => $status,
                'id_o'  => $outlet
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil di tambahkan!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            $this->Utama_model->input_data($data, 'tb_user');
            return redirect('hadmin/pengguna');
        } else {
            redirect('welcome', 'refresh');
        }
    }



    function hapus($id)
    {
        $where = array(
            'id' => $id,
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil di hapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        $this->Utama_model->delete($where, "tb_user");
        return redirect('hadmin/Pengguna');
    }


    function edit($id)
    {
        $where = array(
            'id' => $id
        );
        if ($this->session->userdata("role") == "admin") {
            $data['outlet']    = $this->db->query("SELECT * FROM tb_outlet")->result();
            $data['pengguna1'] = $this->Utama_model->edit_data($where, "tb_user")->result();
            $this->load->view("partials/header");
            $this->load->view("admin/editpengguna", $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function update()
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nm");
        $username = $this->input->post("un");

        $jabatan = $this->input->post("jb");
        $status = $this->input->post("stt");
        $outlet = $this->input->post("ot");

        $data = array(
            'nama_user' => $nama,
            'username' => $username,
            'role' => $jabatan,
            'status' => $status,
            'id_o'  => $outlet,

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

        $this->Utama_model->update($where, $data, 'tb_user');
        redirect("hadmin/pengguna");
    }
}
