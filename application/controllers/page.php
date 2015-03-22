<?php
class Page extends Frontend_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }
    
    
    
    public function index(){
       $this->load->view('_main_layout');
    }      
    
    
    public function _404(){
        $this->load->view('_main_layout/404');
    }
    
    
}