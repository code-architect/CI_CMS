<?php

class MY_Model extends CI_Model {
    
    protected $_table_name = '';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = '';
    protected $_rules = array();
    protected $_timestamps = FALSE;
    
    public function __construct(){
        parent::__construct();
    }
    
    
    /**
     * Get Records
     * @param string $id
     */
    public function get($id = NULL, $single = NULL){
        
        // if the there is id we only need a single result, and if not we will get all       
        if($id != NULL){
            //basic filter
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->where($this->_primary_key, $id);
            $method = 'row';
        }
        elseif($single == TRUE)
        {
            $method = 'row';
        }
        else
        {
            $method = 'result';
        } 
               
        // If an order is already set by db library, set it                       
        if(!count($this->db->ar_orderby)){
            $this->db->order_by($this->_order_by);
        }        
        return $this->db->get($this->_table_name)->$method();                
    }
    
    
    
    
    /**
     * Get a single record
     * @param unknown $where
     * @param string $single
     */
    public function get_by($where, $single = FALSE){
        $this->db->where($where);
        return $this->get(NULL, $single);
    }
    
    
    
    /**
     * Save data, both insert and update
     * @param array $data
     * @param string $id
     * @return string
     */
    public function save($data, $id = NULL){
        
        // Set timestamps
        if($this->_timestamps == TRUE){
            $now = date('Y-m-d H:i:s');
            $id || $data['created'] = $now;
            $data['modified'] = $now;
        }
        
        // If we don't have an id it will be inset anhd if we have an id it's an update
        // Insert
        if($id == NULL){
            // If the primery key has been passed unset it
            !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
            $this->db->set($data);
            $this->db->insert($this->_table_name);
            $id = $this->db->insert_id();
        }
        // Update
        else {
            $filter = $this->_primary_filter;
            $id = $filter($id);            
            $this->db->set($data);
            $this->db->where($this->_primary_key, $id);
            $this->db->update($this->_table_name);
        }
        
        return $id;
    }
    
    
        
    
    /**
     * Delete Records
     * @param unknown $id
     * @return boolean
     */
    public function delete($id){
        $filter = $this->_primary_filter;
        $id = $filter($id);
        
        if(!$id){
            return FALSE;
        }else{
            $this->db->where($this->_primary_key, $id);
            $this->db->limit(1);
            $this->db->delete($this->_table_name);
        }
    }
    
}



