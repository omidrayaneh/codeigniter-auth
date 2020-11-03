<?php
class Home extends MY_Controller{
       public function __construct()
       {
           parent::__construct();
       }

    public function index()
    {
      $data['content_view']='home/home';
      $this->template->sample_template($data);
    }
}