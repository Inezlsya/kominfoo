<?php

    class CSubKegiatanCRUD extends CI_Controller {

        public function index () {
            // $this->load->model('atasan/m_atasan');
            $data['subkegiatan'] = $this->matasankeg->tampilData()->result();
    
            $this->load->view('atasan/VHeader');
            $this->load->view('atasan/VSidebar');
            $this->load->view('atasan/VSubKegiatan', $data);
            $this->load->view('atasan/VFooter');
        }
        public function print(){
            $data['subkegiatan'] = $this->msubkegiatancrud->tampilData('tb_subkegiatan')->result();
            $this->load->view('atasan/print_subkegiatan', $data);
        }
    
        public function search() {
            $keyword = $this->input->post('keyword');
            $data['subkegiatan']=$this->msubkegiatancrud->get_keyword($keyword);
    
            $this->load->view('atasan/VHeader');
            $this->load->view('atasan/VSidebar');
            $this->load->view('atasan/VSubKegiatan', $data);
            $this->load->view('atasan/VFooter');
        }
    }
?>