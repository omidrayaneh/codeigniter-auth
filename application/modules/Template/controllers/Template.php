<?php
class Template extends MY_Controller{
       public function __construct()
       {
           parent::__construct();
       }


    public function admin_template($data = null)
    {
        $this->load->view('admin_template',$data);
    }
    public function home_template($data = null)
    {
        $this->load->view('home_template',$data);
    }
    public function Auth_template($data = null)
    {
        $this->load->view('auth_template',$data);
    }
}