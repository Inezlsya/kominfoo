<?php

class MGrafik extends CI_Model {

  public function tampilData() {
    return $this->db->get('tb_subkegiatan');
}

public function get_grafik()
{
    $data = $this->db->query("SELECT * from tb_subkegiatan ORDER BY id_subkegiatan DESC LIMIT 8");
    return $data->result();
}    

public function pagu_anggaran()
{
    $data = $this->db->query("SELECT * from tb_subkegiatan ORDER BY id_subkegiatan DESC LIMIT 8");
    return $data->result();
}

  }
?>