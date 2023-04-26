<?php

class Transaksi extends CI_Controller
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
        if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $this->load->view('partials/header');
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi, tb_member,tb_paket WHERE id_member=id_m AND id_p = id_paket ")->result();
        $this->load->view('admin/transaksi', $data);

        } else {
            redirect('welcome', 'refresh');
        }
    }
    function tambah_data()
    {
         if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $this->load->view('partials/header');
        $data['paket'] = $this->db->query("SELECT * FROM tb_paket  ")->result();
        $data['nama'] = $this->Utama_model->tampil_data('tb_member')->result();
        $this->load->view('admin/tambahtransaksi', $data);

        } else {
            redirect('welcome', 'refresh');
        }
    }

    function tambah_aksi()
    {
         if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $nama = $this->input->post("nm");
        $paket = $this->input->post("pk");
        $berat = $this->input->post("brt");
        $outlet = $this->input->post("id_outlet");
        $user = $this->input->post("id_user");
        $tgl = $this->input->post("tgl");
        $tgls = $this->input->post("tgls");
        $pajak = $this->input->post("pjk");
        $diskon = $this->input->post("dkn");
        $biaya  = $this->input->post('tb');
        $status = $this->input->post("stt");
        $keterangan = $this->input->post("kt");

        $data = array(
            'id_member' => $nama,
            'id_p'     => $paket,
            'berat'     => $berat,
            'id_outlet' => $outlet,
            'id_user'   => $user,
            'tgl'       => $tgl,
            'batas_waktu' => $tgls,
            'pajak'     => $pajak,
            'biaya_tambahan' => $biaya,
            'diskon'    => $diskon,
            'status'    => $status,
            'keterangan' => $keterangan
        );
        $this->Utama_model->input_data($data, 'tb_transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di tambahkan!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        redirect('hadmin/transaksi');

         } else {
            redirect('welcome', 'refresh');
        }
    }

    function hapus_data($id)
    {
          if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil di hapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        $this->Utama_model->delete($where, "tb_transaksi");
        return redirect('hadmin/Transaksi');

          } else {
            redirect('welcome', 'refresh');
        }
    }

    function edit_data($id)
    {
           if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $where = array(
            'id' => $id
        );
        $data['nama'] = $this->db->query(" SELECT * FROM tb_member ")->result();
        $data['nama1'] = $this->db->query(" SELECT * FROM tb_paket ")->result();
        $data['transaksi'] = $this->Utama_model->edit_data($where, 'tb_transaksi')->result();
        $this->load->view("partials/header");
        $this->load->view("admin/edittransaksi", $data);
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function update()
    {
         if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $id         = $this->input->post('id');
        $nama       = $this->input->post("nm");
        $paket      = $this->input->post("pk");
        $berat      = $this->input->post("brt");
        $outlet     = $this->input->post("id_outlet");
        $user       = $this->input->post("id_user");
        $tgl        = $this->input->post("tgl");
        $tgls       = $this->input->post("tgls");
        $pajak      = $this->input->post("pjk");
        $diskon     = $this->input->post("dkn");
        $biaya       = $this->input->post('tb');
        $status     = $this->input->post("stt");
        $keterangan = $this->input->post("kt");

        $data = array(
            'id_member' => $nama,
            'id_p'     => $paket,
            'berat'     => $berat,
            'id_outlet' => $outlet,
            'id_user'   => $user,
            'tgl'       => $tgl,
            'batas_waktu' => $tgls,
            'pajak'     => $pajak,
            'biaya_tambahan' => $biaya,
            'diskon'    => $diskon,
            'status'    => $status,
            'keterangan' => $keterangan
        );
        $where = array(
            'id' => $id
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil di edit!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        $this->Utama_model->update($where, $data, 'tb_transaksi');
        redirect('hadmin/transaksi');
         } else {
            redirect('welcome', 'refresh');
        }
    }

    function detail_data($id)
    {if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $this->load->model('Laporan_model');
        $data['transaksi'] = $this->Laporan_model->GetDataId($id)->row();
        $this->load->view('partials/header', $data);
        $this->load->view('admin/detail');
         } else {
            redirect('welcome', 'refresh');
        }
    }
    function cetak_detail($id)
    {if (($this->session->userdata("role") == "admin")||($this->session->userdata("role") == "kasir")) {
        $this->load->model('Laporan_model');
        $data['transaksi'] = $this->Laporan_model->GetDataId($id)->row();
        $this->load->view('admin/cetak_struk', $data);
        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'potrait');
        $this->dompdf->render();
        $this->dompdf->stream("struk-pelanggan" . date('Y-m-d'), array("Attachment" => 0));
          } else {
            redirect('welcome', 'refresh');
        }
    }
}
