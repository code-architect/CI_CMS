<?php
class Migration extends Admin_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    
    public function index(){
        //This will look for the current migration version,
        // and then it will look for a file within the migrations folder which starts with 1
        $this->load->library('migration');
    if ( ! $this->migration->current()) {
         show_error($this->migration->error_string());
        } else {
            echo "migration works";
        }
    }
    
}