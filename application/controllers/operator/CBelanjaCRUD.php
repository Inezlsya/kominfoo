<?php

    class CBelanjaCRUD extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
        
            //load model crud
            $this->load->model('MBelanjaCRUD');
        }
        public function index() {
            // $this->load->model('MKegiatanCRUD');
            $data['belanja'] = $this->MBelanjaCRUD->tampilData()->result();
            
            $data['user'] = $this->mpptkcrud->tampilData()->result();
            $data['keg'] = $this->MBelanjaCRUD->count('tb_belanja');
            $data['PPTK'] = $this->mkegiatancrud->count('tb_pengguna', ' PPTK') ;
            $data['pagu_anggaran'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'pagu_anggaran' );
            $data['nominal'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'nominal' );

            $this->load->view('operator/VHeader');
            $this->load->view('operator/VSidebar');
            $this->load->view('operator/VBelanjaCRUD', $data);
            $this->load->view('operator/VFooter');
        }

        public function fungsiTambah() {
            $id_belanja = $this->input->post('id_belanja');
            $sub_belanja = $this->input->post('sub_belanja');
            $kode_rek = $this->input->post('kode_rek');
            $jml_anggaran = $this->input->post('jml_anggaran');
            $tanggal_input = $this->input->post('tanggal_input');
            
            $ArrInsert = array(
                'id_belanja' => $id_belanja,
                'sub_belanja' => $sub_belanja,
                'kode_rek' => $kode_rek,
                'jml_anggaran' => $jml_anggaran,
                'tanggal_input' => $tanggal_input,
            );
    
            // $this->MForm->insertDataBaju($ArrInsert);
            $this->db->insert('tb_belanja', $ArrInsert);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil disimpan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('operator/CBelanjaCRUD/index'));
        }

        // public function fungsiTambah() {
        //     $this->load->library('form_validation');

        //     $this->form_validation->set_rules('sub_belanja', 'Nama Kegiatan', 'required',
        //     array('required' => '%s harus diisi'));

        //     $this->form_validation->set_rules('sub_kegiatan', 'Sub Kegiatan', 'required',
        //     array('required' => '%s harus diisi'));

        //     $this->form_validation->set_rules('sub_belanja', 'Nama Belanja', 'required',
        //     array('required' => '%s harus diisi'));
    
        //     $this->form_validation->set_rules('kode_rek', 'Kode Rekening', 'required',
        //     array('required' => '%s harus diisi', 'alpha' => '%s harus diisi dengan angka saja'));

        //     $this->form_validation->set_rules('jml_anggaran', 'Pagu Anggaran', 'required',
        //     array('required' => '%s harus diisi', 'alpha' => '%s harus diisi dengan angka saja'));

        //     $this->form_validation->set_rules('nama_pptk', 'Nama PPTK', 'required',
        //     array('required' => '%s harus diisi'));

        //     $this->form_validation->set_rules('tanggal_input', 'Tanggal Input', 'required',
        //     array('required' => '%s harus diisi', 'alpha' => '%s harus diisi dengan tanggal saja'));

        //     if ($this->form_validation->run() == FALSE) {
        //         $this->load->view('operator/VKegiatanCRUD');
    
        //     } else {
        //         $id_belanja = $this->input->post('id_belanja');
        //         $sub_belanja = $this->input->post('sub_belanja');
        //         $sub_kegiatan = $this->input->post('sub_kegiatan');
        //         $sub_belanja = $this->input->post('sub_belanja');
        //         $kode_rek = $this->input->post('kode_rek');
        //         $jml_anggaran = $this->input->post('jml_anggaran');
        //         $nama_pptk = $this->input->post('nama_pptk');
        //         $tanggal_input = $this->input->post('tanggal_input');
            
        //         $ArrInsert = array(
        //             'id_belanja' => $id_belanja,
        //             'sub_belanja' => $sub_belanja,
        //             'sub_kegiatan' => $sub_kegiatan,
        //             'sub_belanja' => $sub_belanja,
        //             'kode_rek' => $kode_rek,
        //             'jml_anggaran' => $jml_anggaran,
        //             'nama_pptk' => $nama_pptk,
        //             'tanggal_input' => $tanggal_input,
        //         );
    
        //         // $this->MForm->insertDataBaju($ArrInsert);
        //         $this->db->insert('tb_belanja', $ArrInsert);
        //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //         <strong>Data berhasil disimpan</strong>
        //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //         <span aria-hidden="true">&times;</span>
        //         </button>
        //         </div>');
        //         redirect(base_url('operator/CKegiatanCRUD/index'));
        //     }
        // }

        public function halamanDetail($id_belanja) {
            $where = array('id_belanja' => $id_belanja);
            // $this->load->model('MKegiatanCRUD');
            $data['belanja'] = $this->MBelanjaCRUD->halamanUpdate($where, 'tb_belanja')->result();
            $this->load->view('/operator/VHeader');
            $this->load->view('/operator/VSidebar');
            $this->load->view('/operator/VBelanjaDetail', $data);
            $this->load->view('/operator/VFooter');
        }

        public function halamanUpdate($id_belanja) {
            $where = array('id_belanja' => $id_belanja);
            // $this->load->model('MKegiatanCRUD');
            $data['belanja'] = $this->MBelanjaCRUD->halamanUpdate($where, 'tb_belanja')->result();
             $data['user'] = $this->mpptkcrud->tampilData()->result();
            $this->load->view('/operator/VHeader');
            $this->load->view('/operator/VSidebar');
            $this->load->view('/operator/VBelanjaUpdate', $data);
            $this->load->view('/operator/VFooter');
        }
    
        public function fungsiUpdate() {
            $id_belanja = $this->input->post('id_belanja');
            $sub_belanja = $this->input->post('sub_belanja');
            $kode_rek = $this->input->post('kode_rek');
            $jml_anggaran = $this->input->post('jml_anggaran');
            $tanggal_input = $this->input->post('tanggal_input');
            
            $ArrUpdate = array(
                'id_belanja' => $id_belanja,
                'sub_belanja' => $sub_belanja,
                'kode_rek' => $kode_rek,
                'jml_anggaran' => $jml_anggaran,
                'tanggal_input' => $tanggal_input,
            );

            $this->db->where('id_belanja', $id_belanja);
            $this->db->update('tb_belanja', $ArrUpdate);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diubah</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('operator/CBelanjaCRUD/index'));
        }

        public function fungsiDelete($id_belanja) {
            $this->db->where('id_belanja', $id_belanja);
            $this->db->delete('tb_belanja');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		    <strong>Data berhasil dihapus</strong>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		    </button>
		    </div>');
            redirect(base_url('operator/CKegiatanCRUD/index'));
        }
        public function print(){
            $data['kegiatan'] = $this->mkegiatancrud->tampilData('tb_belanja')->result();
            $this->load->view('operator/print_kegiatan_operator', $data);
       }
        public function search() {
            $keyword = $this->input->post('keyword');
            $data['belanja']=$this->MBelanjaCRUD->get_keyword($keyword);
            $data['keg'] = $this->MBelanjaCRUD->count('tb_belanja');
            $data['PPTK'] = $this->mkegiatancrud->count('tb_pengguna', ' PPTK') ;
            $data['pagu_anggaran'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'pagu_anggaran' );
            $data['nominal'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'nominal' );

            $this->load->view('operator/VHeader');
            $this->load->view('operator/VSidebar');
            $this->load->view('operator/VBelanjaCRUD', $data);
            $this->load->view('operator/VFooter');
        }
    }
