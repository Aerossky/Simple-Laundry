<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	function GetData($tgl_dari,$tgl_sampai,$status){
		$this->db->select('a.*,b.*,c.*,d.*,c.nama as nama_member');
		$this->db->from('tb_transaksi a');
		$this->db->join('tb_paket b','a.id_p=b.id_paket','LEFT');
		$this->db->join('tb_member c','a.id_member=c.id_m','LEFT');
		$this->db->join('tb_outlet d','a.id_outlet=d.id_outlet','LEFT');
		$this->db->where('tgl >=',$tgl_dari);
		$this->db->where('tgl <=',$tgl_sampai);

		if ($status !='semua') {
			$this->db->where('status',$status);
		}

		return $this->db->get();
	}

	function GetDataId($id){
		$this->db->select('a.*,b.*,c.*,d.*,c.nama as nama_member');
		$this->db->from('tb_transaksi a');
		$this->db->join('tb_paket b','a.id_p=b.id_paket','LEFT');
		$this->db->join('tb_member c','a.id_member=c.id_m','LEFT');
		$this->db->join('tb_outlet d','a.id_outlet=d.id_outlet','LEFT');

		$this->db->where('a.id',$id);
		return $this->db->get();
	}

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */