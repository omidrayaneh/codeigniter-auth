<?php
class Home extends MY_Controller{
       public function __construct()
       {
           parent::__construct();
           $this->load->model('User_Model');
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
        if (isset($_POST['login'])){
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required|min_length[8]');

            if ($this->form_validation->run() == TRUE){

                $email=  $_POST['email'];
                $pass=$_POST['password'];
                $query = $this->db->query("SELECT * FROM users WHERE email ='$email'");

                $result = $query->row();
                if ($result){
                    if (password_verify($pass,$result->password) ){
                        $this->session->set_flashdata('success','بدون خطا');
                        $_SESSION['user_logged']=TRUE;
                        $_SESSION['username']=$result->username;
                        $_SESSION['role']=$result->is_admin;
                        if ($result->is_admin=='admin'){
                            redirect('dashboard','refresh');
                        }else{
                            redirect('/','refresh');
                        }
                    }else{
                        $this->session->set_flashdata('error','نام کاربری یا رمز عبور اشتباه است');
                        redirect('login','refresh');

                    }
                }else{
                    $this->session->set_flashdata('error','نام کاربری یا رمز عبور اشتباه است');
                    redirect('login','refresh');
                }



            }
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
        if (isset($_POST['register'])){
            $this->form_validation->set_rules('username','Username','required|min_length[3]|is_unique[users.username]');
            $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password','Password','required|min_length[8]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == TRUE){
                $data=array(
                    'username'=>$_POST['username'],
                    'email'=>$_POST['email'],
                    "password"=> password_hash(($_POST["password"]), PASSWORD_DEFAULT),
                    'created_at'=>date('Y-m-d H:i:s'),
                );

                $this->User_Model->insert($data);
                $this->session->set_flashdata('success','ثبت نام شما با موفقیت انجام شد، از طریق صفحه ورود با ایمیل و رمز عبور داده شده وارد شوید');
                redirect('login');

            }

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