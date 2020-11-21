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
        if (isset($_POST['login'])){
            $this->form_validation->set_rules('email','Email','required|valid_email',
                array('required'=>'ایمیل الزامیست','valid_email'=>'ایمیل را صحیح وارد کنید'));
            $this->form_validation->set_rules('password','Password','required|min_length[8]',
                array('required'=>'رمز عبور الزامیست','min_length'=>'رمز عبور وارد شده کمتر از 8 کاراکتر می باشد'));

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
            $this->form_validation->set_rules('username','Username','required|min_length[5]|is_unique[users.username]',
                array('required'=>'نام کاربری الزامیست','min_length'=>'نام کاربری کمتر از 5 کاراکتر می باشد','is_unique'=>'نام کاربری قبلا وارد شده است'));

            $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]',
                array('required'=>'ایمیل الزامیست','valid_email'=>'ایمیل را صحیح وارد کنید','is_unique'=>'ایمیل قبلا وارد شده است'));

            $this->form_validation->set_rules('password','Password','required|min_length[8]',
                array('required'=>'رمز عبور الزامیست','min_length'=>'رمز عبور کمتر از 8 کاراکتر می باشد'));


            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[8]|matches[password]',
                array('required'=>'تکرار رمز عبور الزامیست','min_length'=>'تکرار رمز عبور کمتر از 8 کاراکتر می باشد','matches'=>'تکرار رمز عبور اشتباه وارد شده است'));

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