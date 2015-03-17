<?php
class Admin_Controller extends MY_Controller {
    
    function __construct(){
        parent::__construct();  
        $this->data['meta_title'] = 'Codearchitect';
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_m');
    }
}