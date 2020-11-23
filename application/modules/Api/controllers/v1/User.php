<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model(array("api/user_model"));
    }

    /**
     *            user register API
     * ----------------------------------------
     * @param: username and email and password
     *
     *-----------------------------------------
     * @link: /register
     */
    public function register_post()
    {
        header("Access-Control-Allow-Origin: *");
        //insert data method
        //echo 'post method';

        //form data value with xss
        $_POST = $this->security->xss_clean($_POST);

        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $confirm = $this->input->post("confirm");

        //form data validation
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|is_unique[users.username]',
            array('required' => 'نام کاربری را وارد کنید', 'min_length' => 'نام کاربری حداقل 5 کاراکتر باشد', 'is_unique' => 'نام کاربری وارد شده تکراری می باشد'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',
            array('required' => 'ایمیل را وارد کنید', 'valid_email' => 'ایمل معتبر را وارد کنید', 'is_unique' => 'ایمیل تکراری می باشد'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]',
            array('required' => 'رمز عبور را وارد کنید', 'min_length' => 'رمز عبور حداقل 8 کاراکتر باشد'));
        $this->form_validation->set_rules('confirm', 'confirm password', 'trim|required|matches[password]',
            array('required' => 'تکرار رمز عبور را وارد کنید', 'matches' => 'تکرار رمز عبور اشتباه است'));
        //check form data validation
        if ($this->form_validation->run() == FALSE) {
            $this->response(array(
                'status' => 0,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            ), REST_Controller::HTTP_BAD_REQUEST);
        } else {

            $user = array(
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            );
            //
            $output = $this->user_model->insert_user($user);
            if ($output > 0 && !empty($output)) {
                $this->response(array(
                    'status' => 1,
                    'message' => 'user has been created successfully'
                ), REST_Controller::HTTP_OK);
            } else {
                $this->response(array(
                    'status' => 0,
                    'message' => 'Failed to created user'
                ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }

    /**
     *            user login API
     * ----------------------------------------
     * @param:  email and password
     *-----------------------------------------
     * @link: /login
     */
    public function login_post()
    {
        header("Access-Control-Allow-Origin: *");
        //insert data method
        //echo 'post method';

        //form data value with xss
        $_POST = $this->security->xss_clean($_POST);
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        //form data validation
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array('required' => 'ایمیل را وارد کنید','valid_email'=>'ایمیل را صحیح وارد کنید'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => 'رمز عبور را وارد کنید'));

        //check form data validation
        if ($this->form_validation->run() == FALSE) {
            $this->response(array(
                'status' => 0,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            ), REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $output = $this->user_model->user_login($email, $password);

            if (!empty($output)) {

                //load authorization Token library
                $this->load->library('Authorization_Token');

                $token_data['id'] = $output->id;
                $token_data['username'] = $output->username;
                $token_data['email'] = $output->email;
                $token_data['role'] = $output->role;
                $token_data['created_at'] = $output->created_at;
                $token_data['time'] = time();

                //generate token
                $user_token = $this->authorization_token->generateToken($token_data);

                $user = array(
                    'user_id' => $output->id,
                    'username' => $output->username,
                    'email' => $output->email,
                    'role' => $output->role,
                    'created_at' => $output->created_at,
                    'token' => $user_token
                );
                // store session for login user
                $this->session->set_flashdata('success','بدون خطا');
                $_SESSION['user_logged']=TRUE;
                $_SESSION['username']=$output->username;
                $_SESSION['user_id']=$output->id;
                $_SESSION['email']=$output->email;
                $_SESSION['role']=md5($output->role);
                $_SESSION['created_at']=$output->created_at;
                $_SESSION['token']=$user_token;
                $this->response(array(
                    'status' => 1,
                    'data' => $user,
                    'message' => 'user successfully logged in'
                ), REST_Controller::HTTP_OK);

            } else {
                $this->response(array(
                    'status' => 0,
                    'message' => 'رمز عبور یا نام کاربری اشتباه می باشد'
                ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }


//	public function index_patch()
//	{
//		//update data method
//		//echo 'patch method';
//
//		$data = json_decode(file_get_contents("php://input"));
//		$id = $data->id;
//		if (isset($data->id) && $data->username && $data->email) {
//
//			$user = array(
//				'username' => $data->username,
//				'email' => $data->email,
//				'id' => $id
//			);
//			if (isset($dataid)) {
//				$this->response(array(
//					'status' => 0,
//					'message' => 'Failed to update user, validation error'
//				), REST_Controller::HTTP_NOT_FOUND);
//			} else {
//				if ($this->user_model->update_user($user, $id)) {
//					$this->response(array(
//						'status' => 1,
//						'message' => 'user has been updated successfully'
//					), REST_Controller::HTTP_OK);
//				} else {
//					$this->response(array(
//						'status' => 0,
//						'message' => 'Failed to updated user'
//					), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
//				}
//			}
//		} else {
//			$this->response(array(
//				'status' => 0,
//				'message' => 'Failed to updated user'
//			), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
//		}
//
//	}
//
//	public function index_delete()
//	{
//		//delete data method
//		//echo 'delete method';
//		$data = json_decode(file_get_contents("php://input"));
//		$user_id = $this->security->xss_clean($data->user_id);
//		if ($this->user_model->delete_user($user_id)) {
//			//return true
//			$this->response(array(
//				'status' => 1,
//				'message' => 'user has been deleted successfully'
//			), REST_Controller::HTTP_OK);
//		} else {
//			//error delete user
//			$this->response(array(
//				'status' => 0,
//				'message' => 'Failed to delete user'
//			), REST_Controller::HTTP_NOT_FOUND);
//		}
//
//	}
//
//	public function index_get()
//	{
//		//select data method
//		//echo 'get method';
//		$users = $this->user_model->get_users();
//
//		if (count($users) > 0) {
//			$this->response(array(
//				'status' => 1,
//				'message' => 'users found',
//				'data' => $users
//			), REST_Controller::HTTP_OK);
//		} else {
//			$this->response(array(
//				'status' => 0,
//				'message' => 'no users found',
//				'data' => $users
//			), REST_Controller::HTTP_NOT_FOUND);
//		}
//
//
//	}

}

