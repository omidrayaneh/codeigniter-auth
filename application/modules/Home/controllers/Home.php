<?php
class Home extends MY_Controller{
       public function __construct()
       {
           parent::__construct();
           $this->load->model('/User_Model');
           $this->load->library('session');
       }

    public function index()
    {
        $data['content_view']='Home/home';
        $data['title']='فروشگاه اینترنتی';
        $this->template->auth_template($data);
    }
    public function login()
    {
       if (isset($_SESSION['user_logged'])){
            redirect('dashboard');
        }


        $data['title']='ورود';
        $data['content_view']='home/login';
        $this->template->auth_template($data);
    }

    public function register()
    {
        if (isset($_SESSION['user_logged'])){
            redirect('dashboard');
        }
        $data['title']='ثبت نام';
        $data['content_view']='home/register';
        $this->template->auth_template($data);
    }
    function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect('/');
    }
}