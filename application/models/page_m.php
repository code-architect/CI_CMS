<?php
class Page_m extends MY_Model{
    
    protected $_table_name = 'pages';   
    protected $_order_by = 'order';
        
    public $rules = array(
        'title' => [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'trim|required|max_length[100]|xss_clean'
        ],
        'slug' => [
            'field' => 'slug',
            'label' => 'Slug',
            'rules' => 'trim|required|max_length[100]|xss_clean|url_title|callback__unique_slug'
        ],        
        'body' => [
            'field' => 'body',
            'label' => 'Body',
            'rules' => 'trim|required|'
        ],
    );
    
    
    
    
    
    /**
     * get new user
     */
    public function get_new(){
        // empty class
        $page = new stdClass();
        $page->title = '';
        $page->slug = '';        
        $page->body = '';
        return $page;
    }
    
    
    
}