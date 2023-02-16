<?php

class MBendahara extends CI_Model {
    public function tampilData() {
        return $this->db->get('tb_subkegiatan');
    }

    public function halamanInput($where, $table) {
        return $this->db->get_where($table, $where);
    }
    
    public function fungsiInput($id_subkegiatan, $data) {
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