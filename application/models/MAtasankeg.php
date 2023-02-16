<?php

class MAtasankeg extends CI_Model {
    public function tampilData() {
        return $this->db->get('tb_subkegiatan');
    }
}

?>