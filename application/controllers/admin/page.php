<?php

class Page extends Admin_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }
    
    
   
    
    
    
    
    /**
     * page index page
     */
    public function index(){   
        //current page         
        $this->data['pages'] = $this->page_m->get_with_parent();
        
        //load view
        $this->data['subview'] = 'admin/page/index';
        $this->load->view('admin/_layout_main', $this->data);
    }
    
    
    
    
    
    /**
     * Order the pages
     */
    public function order(){
    
        $this->data['sortable'] = TRUE;
        //load view
        $this->data['subview'] = 'admin/page/order';
        $this->load->view('admin/_layout_main', $this->data);
    }
    
    
    
    
    /**
     * Post the result of the order() method
     */
    public function order_ajax(){
        // Save order for ajax call
        if(isset($_POST['sortable'])){
            $this->page_m->save_order($_POST['sortable']);
        }
        
        //Fetch All pages
        $this->data['pages'] = $this->page_m->get_nested();
        
        //load view       
        $this->load->view('admin/page/order_ajax', $this->data);
    }
    
    
    
    
    
    
    /**
     * Edit page
     * @param string $id pageid
     */
    public function edit($id = NULL){   
        // Fetch a page or set a new one     
        if($id){
            $this->data['page'] = $this->page_m->get($id);
            count($this->data['page']) || $this->data['errors'][] = 'page could not be found';            
        } else {
            $this->data['page'] = $this->page_m->get_new();
        }
        
        // Pages for dropdown
        $this->data['pages_no_parents'] = $this->page_m->get_no_parents();
        
        
        //Set up the form
        $rules = $this->page_m->rules;              
        $this->form_validation->set_rules($rules);
        
        // Process the form        
        if($this->form_validation->run() == TRUE){
            // saving values from the form
            $data = $this->page_m->array_from_post(array('title', 'slug', 'body', 'parent_id'));            
            $this->page_m->save($data, $id);
            redirect('admin/page');
        }
        
        // Load the view
        $this->data['subview'] = 'admin/page/edit';        
        $this->load->view('admin/_layout_main', $this->data);
    }
    
    
    
    
    /**
     * Delete page
     * @param unknown $id
     */
    public function delete($id){
        $this->page_m->delete($id);
        redirect('admin/page');
    }
    
    
     
    
    
    
    
    public function _unique_slug($str){
        
        // Do not validate if the slug already exists
                
        // current page id
        $id = $this->uri->segment(4);
        
        // check if email exists
        $this->db->where('slug', $this->input->post('slug'));

        // look for email but not for the current page
        !$id || $this->db->where('id !=', $id);
        
        $page = $this->page_m->get();
        
        // return false if count returns value i.e. email exists
        // tell codeigniter to show message
        if(count($page)){
            $this->form_validation->set_message('_unique_slug', '%s should be unique' );
            return FALSE;
        }
        
        // return true by default
        return TRUE;
    }
    
}