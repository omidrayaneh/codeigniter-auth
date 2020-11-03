<?php
class Home extends MY_Controller{
       public function __construct()
       {
           parent::__construct();
       }

    public function index()
    {
        $data['content_view']='Home/home';
        $data['title']='فروشگاه اینترنتی';
        $this->template->auth_template($data);
    }
    public function login()
    {
        $data['title']='ورود';
        $data['content_view']='Home/login';
        $this->template->auth_template($data);
    }
    public function register()
    {
        $data['title']='ثبت نام';
        $data['content_view']='Home/register';
        $this->template->auth_template($data);
    }
}