<?php

class MPPTK extends CI_Model {

    // public function tampilData() {
    //     return $this->db->get('tb_kegiatan');
    // }

    public function tampilData() {
        return $this->db->get_where("tb_subkegiatan", array('nama_pptk' => $this->session->userdata('nama_pengguna')));
        // return $this->db->get_where("tb_kegiatan", array('nama_pptk' == $this->session->userdata('nama_pengguna')));
    }
    public function tampil() {
        return $this->db->get('tb_transaksi');
    }

    public function halamanInput($where, $table) {
        return $this->db->get_where($table, $where);
        //return $this->db->get_where("tb_kegiatan", array('kode_rekening' => $this->session->userdata('kode_rekening')));
    }
    
    public function fungsiInput($id_kegiatan, $data) {
        $this->db->where('id_subkegiatan', $id_kegiatan);
		$this->db->update('tb_subkegiatan', $data);
    }
    public function halamanUpdate($where, $table) {
        return $this->db->get_where($table, $where);

    }

    public function fungsiUpdate($id_subkegiatan, $data) {
        $this->db->where('id_subkegiatan', $id_subkegiatan);
		$this->db->update('tb_subkegiatan', $data);
    }
    public function sum($table, $field)
    {
        $this->db->select_sum($field);
        return $this->db->get($table)->row_array()[$field];
    }
    public function count($table)
    {
        return $this->db->count_all($table);
    }
    

}

?>