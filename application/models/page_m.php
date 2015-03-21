<?php
class Page_m extends MY_Model{
    
    protected $_table_name = 'pages';   
    protected $_order_by = 'order';
        
    public $rules = array(
        'parent_id' => [
            'field' => 'parent_id',
            'label' => 'Parent',
            'rules' => 'trim|intval'
        ],
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
     * get new page
     */
    public function get_new(){
        // empty class
        $page = new stdClass();
        $page->title = '';
        $page->slug = '';        
        $page->body = '';
        $page->parent_id = 0;
        return $page;
    }
    
    
    
    
    /**
     * Deleteing pages and updating child pages
     * @see MY_Model::delete()
     */
    public function delete($id){
        // Delete a page
        parent::delete($id);
        
        // Reset it's parenr's id for all of it's children
        $this->db->set(array('parent_id' => 0))->where('parent_id', $id)->update($this->_table_name);
    }    
    
    
    
    
    public function get_with_parent($id = NULL, $single = FALSE){
        $this->db->select('pages.*, p.slug as parent_slug, p.title as parent_title');
        $this->db->join('pages as p', 'pages.parent_id = p.id', 'left');
        return parent::get($id, $single);
    }

    
    
    
    /**
     * Get all the pages without parent
     * @return multitype:string NULL
     */
    public function get_no_parents(){
        // Fetch pages without parents
        $this->db->select('id, title');
        $this->db->where('parent_id', 0);
        $query = $this->db->get($this->_table_name);
        $pages = $query->result();
        
        // return key => value pair array
        $array = array(0 => 'No Parent');
        if(count($pages)){
            foreach ($pages as $page){
                $array[$page->id] = $page->title;
            }
        }   
        return $array;    
    }  
    
}