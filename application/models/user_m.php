<?php

class User_m extends MY_Model{
    
    protected $_table_name = 'users';    
    protected $_order_by = 'name';
    public $rules = array(
        'email' => [
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'trim|required|valid_email|xss_clean'            
                    ],
        'password' => [
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required'            
                      ],
    );
    
    public $rules_admin = array(
        'name' => [
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|xss_clean'
        ],        
        'email' => [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean|callback__unique_email'
        ],
        'password' => [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|matches[password_confirm]'
        ],
        'password_confirm' => [
            'field' => 'password confirm',
            'label' => 'Confirm Password',
            'rules' => 'trim|matches[password]'
        ],
    );
   
    
    public function __construct(){
        parent::__construct();
    }
    
    
    /**
     * User login
     */
    public function login(){
        $user = $this->get_by(array(
            'email'     =>  $this->input->post('email'),
            'password'  =>  $this->hash($this->input->post('password'))
        ), TRUE);
        
        if(count($user)){
            // Log user in
            $data = [
                'name'      =>  $user->name,
                'email'     =>  $user->email,
                'id'        =>  $user->id,
                'loggedin'  =>  TRUE
            ];
            $this->session->set_userdata($data);
        }
    }
    
    
    /**
     * Logout method
     */
    public function logout(){
        $this->session->sess_destroy();
    }
    
   
    /**
     * If the user is logged in, this method will return true
     * @return boolean
     */
    public function loggedin(){
        return (bool) $this->session->userdata('loggedin');
    }
    
    
    
    
    /**
     * Hashing the passord
     * @param pasword $string
     * @return string
     */
    public function hash($string){
        return hash('sha1', $string . config_item('encryption_key'));    
    }
    
    
    
    
    /**
     * get new user
     */
    public function get_new(){
        // empty class
        $user = new stdClass();
        $user->name = '';
        $user->email = '';
        $user->password = '';
        return $user;        
    }
    
    
    
    
    /**
     * front page user get
     */
    public function get_front_page_user(){
        $this->db->where('id !=' ,$this->session->userdata('id'));
        $query = $this->db->get($this->_table_name);
        return $query->result();
    }
    
}