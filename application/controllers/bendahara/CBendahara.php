<?php

class CBendahara extends CI_Controller {

        public function index() {
            $data['subkegiatan']= $this->MOperatorCRUD->tampilData()->result();
            $data['pagu_anggaran'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'pagu_anggaran' );
            $data['nominal'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'nominal' );
            

            $this->load->view('bendahara/VHeader');
            $this->load->view('bendahara/VSidebar');
            $this->load->view('bendahara/VBendahara', $data);
            $this->load->view('bendahara/VFooter');
        }

        public function halamanInput($id_subkegiatan) {
            $where = array('id_subkegiatan' => $id_subkegiatan);
            $data['subkegiatan'] = $this->mpptk->halamanInput($where, 'tb_subkegiatan')->result();

            $this->load->view('/bendahara/VHeader');
            $this->load->view('/bendahara/VSidebar');
            $this->load->view('/bendahara/VTransfer', $data);
            $this->load->view('/bendahara/VFooter');
        }
        public function halamanDetail($id_subkegiatan) {
            $where = array('id_subkegiatan' => $id_subkegiatan);
            // $this->load->model('MKegiatanCRUD');
            $data['subkegiatan'] = $this->msubkegiatancrud->halamanUpdate($where, 'tb_subkegiatan')->result();
            $this->load->view('/bendahara/VHeader');
            $this->load->view('/bendahara/VSidebar');
            $this->load->view('/bendahara/VSubKegiatanDetail', $data);
            $this->load->view('/bendahara/VFooter');
        }
// update untuk ganti sandi pptk
        public function halamanUpdate($id_pengguna) {
		$where = array('id_pengguna' => $id_pengguna);
		$this->load->model('MPPTKCRUD');
		$data['pptk'] = $this->MPPTKCRUD->halamanUpdate($where, 'tb_pengguna')->result();
		$this->load->view('/bendahara/VHeader');
		$this->load->view('/bendahara/VSidebar');
		$this->load->view('/bendahara/VBendaharaUpdate', $data);
		$this->load->view('/bendahara/VFooter');
	}

	public function fungsiUpdate() {
		$id_pengguna = $this->input->post('id_pengguna');
        $nama_pengguna = $this->input->post('nama_pengguna');
		$jabatan_pengguna = 'Bendahara';
		$pengguna_status = $this->input->post('pengguna_status');
		$username_pengguna = $this->input->post('username_pengguna');
        $password_pengguna = $this->input->post('password_pengguna');

        $ArrUpdate = array(
        'id_pengguna' => $id_pengguna,
        'nama_pengguna' => $nama_pengguna,
		'jabatan_pengguna' => $jabatan_pengguna,
		'pengguna_status' => $pengguna_status,
		'username_pengguna' => $username_pengguna,
        'password_pengguna' => $password_pengguna,
        );

		$this->db->where('id_pengguna', $id_pengguna);
		$this->db->update('tb_pengguna', $ArrUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil diubah</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('pptk/CBendaharaCRUD/index'));
	}

        public function fungsiInput() {
            $id_subkegiatan = $this->input->post('id_subkegiatan');
            $nama_kegiatan = $this->input->post('nama_kegiatan');
            $sub_kegiatan = $this->input->post('sub_kegiatan');
            $nama_belanja = $this->input->post('nama_belanja');
            $kode_rekening = $this->input->post('kode_rekening');
            $pagu_anggaran = $this->input->post('pagu_anggaran');
            $nominal = $this->input->post('nominal');
            $nama_pptk = $this->input->post('nama_pptk');
            $tanggal_input = $this->input->post('tanggal_input');
    
            $config['upload_path'] = './uploads/bukti_transfer/';
            $config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';
            $config['max_size']             = 1000000;
            $config['max_width']            = 1000000;
            $config['max_height']           = 1000000;
    
            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $file1 = $this->upload->do_upload('bukti_transfer1');
            $file2 = $this->upload->do_upload('bukti_transfer2');
            $file3 = $this->upload->do_upload('bukti_transfer3');
            $data1 = $this->upload->data();
            $data2 = $this->upload->data();
            $data3 = $this->upload->data();
            
            if ($file1) {    
                $data1 = $this->upload->data();
                $bukti_transfer1 = $data1['file_name'];
            } else {
                $bukti_transfer1 = $this->input->post('bukti_transfer1');    
            }
            
            if ($file2) {    
                $data2 = $this->upload->data();
                $bukti_transfer2 = $data2['file_name'];
            } else {
                $bukti_transfer2 = $this->input->post('bukti_transfer2');    
            }

            if ($file3) {    
                $data3 = $this->upload->data();
                $bukti_transfer3 = $data3['file_name'];
            } else {
                $bukti_transfer3 = $this->input->post('bukti_transfer3');    
            }
            
    
            // print_r($bukti_tagihan);
    
            $ArrInput = array(
                'id_subkegiatan' => $id_subkegiatan,
                'nama_kegiatan' => $nama_kegiatan,
                'sub_kegiatan' => $sub_kegiatan,
                'nama_belanja' => $nama_belanja,
                'kode_rekening' => $kode_rekening,
                'pagu_anggaran' => $pagu_anggaran,
                'nominal' => $nominal,
                'nama_pptk' => $nama_pptk,
                'tanggal_input' => $tanggal_input,
                'bukti_transfer1' => $bukti_transfer1,
                'bukti_transfer2' => $bukti_transfer2,
                'bukti_transfer3' => $bukti_transfer3,
            );
    
            // $this->MForm->updateDataBaju($id, $ArrInput);
            $this->db->where('id_subkegiatan', $id_subkegiatan);
            $this->db->update('tb_subkegiatan', $ArrInput);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil disimpan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            require APPPATH . 'views/vendor/autoload.php';
            
            function send($query){
                
                $options = array(
                    'cluster' => 'ap1',
                    'useTLS' => true
                 );
                 
                 $pusher = new Pusher\Pusher(
                    '4292a41636ef440c9f4e',
                    '194fac79db97aafd16eb',
                    '1421240',
                    $options
                );
                
                $pusher->trigger('my-channel', 'my-event', $query);
                return $pusher;
            }
            $html = '<a class="dropdown-item d-flex align-items-center" href="#">
<div class="mr-3">
    <div class="icon-circle bg-primary">
        <i class="fas fa-file-alt text-white"></i>
    </div>
</div>
<div>
    <div class="small text-gray-500">Bendahara menambahkan Bukti Transfer</div>
    <span class="font-weight-bold">Tagihan Anda Sudah Terbayar</span>
</div>
</a>';
            $query = [
                "message"=>$html,
                "role"=> "bendahara",
                "UserId"=>1,
                "count"=>2,
            ];
            send($query);
            redirect(base_url('bendahara/CBendahara'));
        }
        public function search() {
            $keyword = $this->input->post('keyword');
            $data['subkegiatan']=$this->msubkegiatancrud->get_keyword($keyword);
            $data['pagu_anggaran'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'pagu_anggaran' );
            $data['nominal'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'nominal' );
    
            $this->load->view('bendahara/VHeader');
            $this->load->view('bendahara/VSidebar');
            $this->load->view('bendahara/VBendahara', $data);
            $this->load->view('bendahara/VFooter');
        }


}

?>


