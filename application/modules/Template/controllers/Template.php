<?php
class Template extends MY_Controller{
       public function __construct()
       {
           parent::__construct();
       }

    public function index()
    {
       echo 'Template page';
    }
    public function sample_template($data = null)
    {
      $this->load->view('Template/sample_template',$data);
    }
}