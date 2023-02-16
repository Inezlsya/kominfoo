<?php

class MBelanjaCRUD extends CI_Model {
    public function tampilData() {
        $min_tgl = $this->session->userdata('tahun').'-01-01';
        $max_tgl = $this->session->userdata('tahun').'-12-30';
        
        $query =  $this->db->query(sprintf("SELECT * FROM tb_belanja WHERE `tanggal_input` BETWEEN '%s' AND '%s'", $min_tgl, $max_tgl));
        return $query;
        return $this->db->get('tb_subkegiatan');
        return $this->db->get('tb_belanja');
        return $this->db->get('tb_belanja');
        
    }
 public function tampilData_user() {
        return $this->db->get('tb_pengguna');
    }
    public function fungsiTambah($data) {
        $this->db->insert('tb_belanja', $data);

    }

    public function halamanUpdate($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function fungsiUpdate($id_belanja, $data) {
        $this->db->where('id_belanja', $id_belanja);
		$this->db->update('tb_belanja', $data);
    }

    function fungsiDelete($id_belanja) {
		$this->db->where('id_belanja', $id_belanja);
		$this->db->delete('tb_belanja');
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

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_belanja');
        $this->db->like('sub_belanja', $keyword);
        $this->db->or_like('kode_rek', $keyword);
        $this->db->or_like('jml_anggaran', $keyword);
        $this->db->or_like('tanggal_input', $keyword);
        return $this->db->get()->result();
    }
}

?>