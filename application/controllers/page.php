<?php
class Page extends Frontend_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }
    
    
    
    public function index(){       
        
       // Fetch the page data
       // The true will return an object, rather than an array of objects  
       $this->data['page'] = $this->page_m->get_by(array('slug' => (string)$this->uri->segment(1)), TRUE);  
       count($this->data['page']) || show_404(current_url());   
       
       // Fetch the page data
       $method = '_'.$this->data['page']->template;
       // check if the method exists
       if(method_exists($this, $method)){
           $this->$method();
       }
       else {
           log_message('error', 'Could not load template '.$method.' in file '.__FILE__.' at line '.__LINE__);
           show_error('Could not load teamplate', $method);
       }
              
       // Load the view
       $this->data['subview'] = $this->data['page']->template;
       $this->load->view('_main_layout', $this->data);
    }      
    
    
    
    
    private function _page(){
        dump('welcome from the page template');
    }
    
    
    

    private function _homepage(){
        
        $this->load->model('article_m');
        $this->db->limit(6);
        $this->data['articles'] = $this->article_m->get();
    }
    
    
    

    private function _news_archive(){
        dump('welcome from the news template');
    }
    
    
    
    
    /**
     * Custom 404 error page
     */
    public function _404(){               
        $this->load->view('404');
    }
    
    
}