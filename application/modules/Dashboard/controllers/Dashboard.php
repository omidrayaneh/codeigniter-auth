<?php
class Dashboard extends MY_Controller{
    public function __construct()
    {
       parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Dashboard_model');

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

    public function users()
    {
        $data['content_view']='Dashboard/users';
        $data['users']=$this->Dashboard_model->all_users();
        $this->template->admin_template($data);
    }

    public function delete_user($id)
    {
        if ($this->index->post('id')) {
            $res= $this->Dashboard_model->delete_user($id);
            echo json_encode(array(
                "statusCode"=>200
            ));
        }
    }
}
