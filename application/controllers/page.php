<?php
class Page extends Frontend_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }
    
    
    
    public function index(){
        $pages = $this->page_m->get_by(['slug' => 'about']);
        echo "<pre>";
        var_dump($pages);
    }  
    
    public function save(){
        
        $data = [            
            'order' =>  '3',           
        ];
                
        $id = $this->page_m->save($data, 3);
        echo "<pre>";
        var_dump($id);
    }
    
    
    public function delete(){    
           
        $id = $this->page_m->delete(3);
        echo "<pre>";
        var_dump($id);
    }
    
    
}