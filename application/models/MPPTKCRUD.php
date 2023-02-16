<?php
class MPPTKCRUD extends CI_Model {
  
  public function tampilData() {
    return $this->db->get_where("tb_pengguna", array('jabatan_pengguna' => 'PPTK'));
  }

  public function fungsiTambah($data) {
    $this->db->insert('tb_pengguna', $data);
  }

  public function halamanUpdate($where, $table) {
    return $this->db->get_where($table, $where);
  }

  public function fungsiUpdate($id_pengguna, $data) {
    $this->db->where('id_pengguna', $id_pengguna);
		$this->db->update('tb_pengguna', $data);
  }

  function fungsiDelete($id_pengguna) {
    $this->db->where('id_pengguna', $id_pengguna);
    $this->db->delete('tb_pengguna');
	}

  public function getNotif($id_pengguna)
    {
        return $this->db->get_where('tb_notif', ['id_pengguna' => $id_pengguna])->num_rows();
    }

    public function getUserNotif($id_pengguna)
    {
        return $this->db->get_where('tb_notif', ['id_pengguna' => $id_pengguna])->result_array();
    }

    public function getCountUserNotifUnread($id_pengguna)
    {
        return $this->db->get_where('tb_notif', ['id_pengguna' => $id_pengguna, 'is_read' => 0])->num_rows();
    }

    public function readAllNotif($id_pengguna)
    {
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update('tb_notif', ['is_read' => 1]);
    }

}

?>