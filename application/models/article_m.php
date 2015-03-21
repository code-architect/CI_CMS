<?php
class Article_m extends MY_Model{
    
    protected $_table_name = 'articles';   
    protected $_order_by = 'pubdate desc, id desc';
    protected $_timestamps = TRUE;
        
    public $rules = array(
        'pubdate' => [
            'field' => 'pubdate',
            'label' => 'Publication Date',
            'rules' => 'trim|required|exact_length[10]|xss_clean'
        ],
        'title' => [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'trim|required|max_length[100]|xss_clean'
        ],
        'slug' => [
            'field' => 'slug',
            'label' => 'Slug',
            'rules' => 'trim|required|max_length[100]|xss_clean|url_title'
        ],        
        'body' => [
            'field' => 'body',
            'label' => 'Body',
            'rules' => 'trim|required|'
        ],
    );
    
    
    
    
    
    /**
     * get new article
     */
    public function get_new(){
        // empty class
        $article = new stdClass();
        $article->title = '';
        $article->slug = '';        
        $article->body = '';
        $article->pubdate = date('Y-m-d');
        return $article;        
       
    }
    
    
    
    
    
    
}