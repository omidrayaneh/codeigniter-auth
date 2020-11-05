<?php
class Dashboard extends MY_Controller{
    public function __construct()
    {
       parent::__construct();
       if (!isset($_SESSION['user_logged'])){
           $this->session->set_flashdata('error','ابتدا وارد سایت شوید');
           redirect('home/login');
       }
    }

    public function index()
    {
        $data['content_view']='Dashboard/dashboard';
        $this->template->admin_template($data);
    }
}
