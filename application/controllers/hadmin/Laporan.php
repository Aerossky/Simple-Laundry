<?php
class Laporan extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Laporan_model');
		if ($this->session->userdata("role") == null) {
			redirect('welcome', 'refresh');
		}
	}
	public function index()
	{
		$this->load->view("partials/header");
		$this->load->view("admin/laporan");
	}

	function cari(){
		$tgl_dari = $this->input->post('tgl_dari');
		$tgl_sampai = $this->input->post('tgl_sampai');
		$status = $this->input->post('status');
		$data['tgl_dari'] = $tgl_dari;
		$data['tgl_sampai'] = $tgl_sampai;
		$data['status'] = $status;
		$data['laporan'] = $this->Laporan_model->GetData($tgl_dari,$tgl_sampai,$status)->result();
		$this->load->view('admin/tampil_laporan',$data);
    	// echo "<pre>";
    	// print_r($data);
    	// echo "</pre>";
	}

	function do_print($tgl_dari,$tgl_sampai,$status){
		$data['laporan'] = $this->Laporan_model->GetData($tgl_dari,$tgl_sampai,$status)->result();
		$this->load->view('admin/cetak',$data);
		$html = $this->output->get_output();
		$this->load->library('pdf');
		$this->dompdf->loadHtml($html);
		$this->dompdf->setPaper('A4', 'potrait');
		$this->dompdf->render();
		$this->dompdf->stream("laporan-transaksi".date('Y-m-d'), array("Attachment"=>0));
	}
}
