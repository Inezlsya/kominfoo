<?php

class CAtasan extends CI_Controller {
    
    public function index () {
        // $this->load->model('atasan/m_atasan');
        $data['kegiatan']= $this->msubkegiatancrud->tampilData()->result();
        $data['pagu_anggaran'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'pagu_anggaran' );
        $data['nominal'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'nominal' );

        $this->load->view('atasan/VHeader');
        $this->load->view('atasan/VSidebar');
        $this->load->view('atasan/VAtasan', $data);
        $this->load->view('atasan/VFooter');
    }
    public function print(){
        $data['kegiatan'] = $this->msubkegiatancrud->tampilData('tb_subkegiatan')->result();
        $this->load->view('atasan/print_kegiatan', $data);
    }

    public function search() {
        $keyword = $this->input->post('keyword');
        $data['kegiatan']=$this->msubkegiatancrud->get_keyword($keyword);
        $data['pagu_anggaran'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'pagu_anggaran' );
        $data['nominal'] = $this->msubkegiatancrud->sum('tb_subkegiatan', 'nominal' );

        $this->load->view('atasan/VHeader');
        $this->load->view('atasan/VSidebar');
        $this->load->view('atasan/VAtasan', $data);
        $this->load->view('atasan/VFooter');
    }

}
?>