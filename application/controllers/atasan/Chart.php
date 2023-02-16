<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
     
class Chart extends CI_Controller {  
    /** 
     * This method is used to get all the data. 
     * 
     * @It will return Response 
    */  
    public function __construct() {  
        parent::__construct();
        $this->load->model('MGrafik');
        $this->load->helper('url','form','file');
    }
    
    public function index () {
        
        $data['nominal'] = $this->MGrafik->get_grafik();
        $data['pagu_anggaran'] = $this->MGrafik->get_grafik();

        $this->load->view('atasan/VHeader');
        $this->load->view('atasan/VSidebar');
        $this->load->view('atasan/VGrafik1', $data);
        $this->load->view('atasan/VFooter');
    }
}
?>