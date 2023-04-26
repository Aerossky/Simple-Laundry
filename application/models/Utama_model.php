<?php
class Utama_model extends CI_Model
{
    // tampil data
    function tampil_data($table)
    {
        return $this->db->get($table);
    }

    // masukkan data
    function input_data($data, $table)
    {

        $this->db->insert($table, $data);
    }

    //hapus data
    function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // edit
    function edit_data($where, $table)
    {
        return  $this->db->get_where($table, $where);
    }

    // update
    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
