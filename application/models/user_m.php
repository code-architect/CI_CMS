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
    
}