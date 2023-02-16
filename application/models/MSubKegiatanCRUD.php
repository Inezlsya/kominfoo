<?php

class MSubKegiatanCRUD extends CI_Model {
    public function tampilData() {
        
            $min_tgl = $this->session->userdata('tahun').'-01-01';
            $max_tgl = $this->session->userdata('tahun').'-12-30';
            
            $query =  $this->db->query(sprintf("SELECT * FROM tb_subkegiatan WHERE `tanggal_input` BETWEEN '%s' AND '%s'", $min_tgl, $max_tgl));
            return $query;
            return $this->db->get('tb_transaksi');
            return $this->db->get('tb_subkegiatan');
            return $this->db->get('tb_kegiatan');
        
        
    }
 public function tampilData_user() {
        return $this->db->get('tb_pengguna');
    }
    public function fungsiTambah($data) {
        $this->db->insert('tb_subkegiatan', $data);
        

//         require APPPATH . 'views/vendor/autoload.php';

//   $options = array(
//     'cluster' => 'ap1',
//     'useTLS' => true
//   );
//   $pusher = new Pusher\Pusher(
//     'c8b758179e6343a897cb',
//     '1ff154b6d0335cd4fee5',
//     '1421239',
//     $options
//   );

//   $data['message'] = 'hello world';
//   $pusher->trigger('my-channel', 'my-event', $data);
    }

    public function halamanUpdate($where, $table) {
        return $this->db->get_where($table, $where);

    }

    public function fungsiUpdate($id_subkegiatan, $data) {
        $this->db->where('id_subkegiatan', $id_subkegiatan);
		$this->db->update('tb_subkegiatan', $data);
    }

    function fungsiDelete($id_subkegiatan) {
		$this->db->where('id_subkegiatan', $id_subkegiatan);
		$this->db->delete('tb_subkegiatan');
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
        $this->db->from('tb_subkegiatan');
        $this->db->like('nama_kegiatan', $keyword);
        $this->db->or_like('sub_kegiatan', $keyword);
        $this->db->or_like('nama_belanja', $keyword);
        $this->db->or_like('kode_rekening', $keyword);
        $this->db->or_like('pagu_anggaran', $keyword);
        $this->db->or_like('nama_pptk', $keyword);
        $this->db->or_like('tanggal_input', $keyword);
        return $this->db->get()->result();
    }

    public function get_prov($title)
{
  $this->db->like('nama_belanja', $title, 'BOTH');
  $this->db->order_by('id_subkegiatan', 'asc');
  $this->db->limit(10);
  return $this->db->get('tb_subkegiatan')->result();
}
}

?>