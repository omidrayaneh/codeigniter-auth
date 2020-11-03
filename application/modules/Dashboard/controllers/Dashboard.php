<?php
class Dashboard extends MY_Controller{
    public function __construct()
    {
       parent::__construct();
    }

    public function index()
    {
        $data['content_view']='Dashboard/dashboard';
        $this->template->admin_template($data);
    }
}
