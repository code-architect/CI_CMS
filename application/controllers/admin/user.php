<?php

class User extends Admin_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    
    
    /**
     * User index page
     */
    public function index(){   
        //current user         
        $this->data['users'] = $this->user_m->get_front_page_user();
        $this->data['subview'] = 'admin/user/index';
        $this->load->view('admin/_layout_main', $this->data);
    }
    
    
    
    
    /**
     * Edit User
     * @param string $id userid
     */
    public function edit($id = NULL){   
             
        if($id){
            $this->data['user'] = $this->user_m->get($id);
            count($this->data['user']) || $this->data['errors'][] = 'User could not be found';            
        } else {
            $this->data['user'] = $this->user_m->get_new();
        }
        
        $rules = $this->user_m->rules_admin;
        // hacking into the rules, because in certain user password need to be required        
        $id || $rules['password'] = '|required';
        
        $this->form_validation->set_rules($rules);
        
        if($this->form_validation->run() == TRUE){
            // saving values from the form
            $data = $this->user_m->array_from_post(array('name', 'email', 'password'));
            $data['password'] = $this->user_m->hash($data['password']);
            $this->user_m->save($data, $id);
            redirect('admin/user');
        }
        
        $this->data['subview'] = 'admin/user/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }
    
    
    
    
    /**
     * Delete User
     * @param unknown $id
     */
    public function delete($id){
        $this->user_m->delete($id);
        redirect('admin/user');
    }
    
    
    
    
    
    /**
     * user login
     */
    public function login(){
        // dashboard path
        $dashboard = 'admin/dashboard';
        
        // If logged in redirect
        $this->user_m->loggedin() == FALSE || redirect($dashboard);
        
        $rules = $this->user_m->rules;
        $this->form_validation->set_rules($rules);
        
        if($this->form_validation->run() == TRUE){
            // Login the user 
            if($this->user_m->login() == TRUE){
                redirect($dashboard);
            }else{
                $this->session->set_flashdata('error', 'That email/password combination does not exists');
                redirect('admin/user/login', 'refresh');
            }            
        }
        
        $this->data['subview'] = 'admin/user/login';
        $this->load->view('admin/_layout_modal', $this->data);
    }
    
    
    
    
    /**
     * user logout
     */
    public function logout(){
        $this->user_m->logout();
        redirect('admin/user/login');
    }
    
    
    
    
    public function _unique_email($str){
        
        // current user id
        $id = $this->uri->segment(4);
        
        // check if email exists
        $this->db->where('email', $this->input->post('email'));

        // look for email but not for the current user
        !$id || $this->db->where('id !=', $id);
        
        $user = $this->user_m->get();
        
        // return false if count returns value i.e. email exists
        // tell codeigniter to show message
        if(count($user)){
            $this->form_validation->set_message('_unique_email', '%s should be unique' );
            return FALSE;
        }
        
        // return true by default
        return TRUE;
    }
    
}