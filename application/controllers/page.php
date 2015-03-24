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
       
       add_meta_title($this->data['page']->title);
       
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
        $this->data['recent_news'] = $this->article_m->get_recent();
        
    }
    
    
    

    private function _homepage(){
        
        $this->load->model('article_m');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->limit(6);
        $this->data['articles'] = $this->article_m->get();
    }
    
    
    

    private function _news_archive(){
        $this->load->model('article_m');
        $this->data['recent_news'] = $this->article_m->get_recent();
        
        // Count all articles
        $this->db->where('pubdate <=', date('Y-m-d'));
        $count = $this->db->count_all_results('articles');
                  
        // set up pagination
        $perpage = 4;
        if ($count > $perpage) {
            // Codeigniter pagination
            $this->load->library('pagination');
            
            $config['base_url'] = site_url($this->uri->segment(1). '/');
            $config['total_rows'] = $count;
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 2;
                        
            $this->pagination->initialize($config);
            
            $this->data['pagination'] = $this->pagination->create_links();
            
            // set an offset param, that will use the limit statement when we will fetch out articles
            $offset = $this->uri->segment(2);
        } else
        {
            $this->data['pagination'] = '';            
            // set an ofset param, that will use the limit statement when we will fetch out articles
            $offset = 0;
        }
                       
        // fetch articles
        $this->db->count_all_results('articles');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->limit($perpage, $offset);
        $this->data['articles'] = $this->article_m->get();        
    }
    
    
    
    
    /**
     * Custom 404 error page
     */
    public function _404(){               
        $this->load->view('404');
    }
    
    
}