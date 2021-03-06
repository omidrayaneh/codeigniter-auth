<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Categories extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('api/category_model'));
        $this->load->library('Authorization_Token');

    }

    /***
     * get all categories
     */
    public function allCategories_get()
    {
        header("Access-Control-Allow-Origin: *");
        //select data method
        //echo 'get method';
        if (isset($_SESSION['token']) ) {
            $output = $this->category_model->get_categories();
            $this->response(array(
                'status' => 1,
                'message'=>'ok',
                'data' => $output,
            ), REST_Controller::HTTP_OK);

        }

    }



    /**
     * add new categories with API
     * @method: post
     */
    public function createCategories_post()
    {
        header("Access-Control-Allow-Origin: *");
        //insert data method
        //echo 'post method';

        //load authorization Token library
        $this->load->library('Authorization_Token');

        $validate_token = $this->authorization_token->validateToken();

        /**
         * --------------------------------------------
         *                User validate token
         *----------------------------------------------
         */
        if (!empty($validate_token) && $validate_token['status'] == TRUE) {
            //form data value with xss
            $_POST = $this->security->xss_clean($_POST);

            /**
             *
             *  user_id -> login user id
             *  parent_id -> the category child parent id
             *
             */
            //form data validation
            $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]|is_unique[categories.title]',
                array('required' => 'نام گروه را وارد کنید', 'is_unique' => 'نام گروه تکراری می باشد', 'min_length' => 'نام گروه کمتر از 5 کاراکتر نباشد'));

            //check form data validation
            if ($this->form_validation->run() == FALSE) {
                $this->response(array(
                    'status' => 0,
                    'error' => $this->form_validation->error_array(),
                    'message' => validation_errors()
                ), REST_Controller::HTTP_NOT_FOUND);
            } else {


                //load category model


                $parent_id=$this->input->post('parent_id');
                if (empty($parent_id)) {
                    $parent_id=NULL;
                }
                //insert category
                $title=$this->input->post('title');
                $insert_category_data =array(
                    'title'=>$this->input->post('title'),
                    'slug'=> $this->category_model->makeSlug($title),
                    'status'=> $this->input->post('status'),
                    'parent_id'=>$parent_id,
                    'user_id'=>$validate_token['data']->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                );
                $output = $this->category_model->create_category($insert_category_data);
                //success
                if ($output > 0 && !empty($output)) {
                    $this->response(array(
                        'status' => 1,
                        'message' => 'category add'
                    ), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        'status' => 0,
                        'message' => 'category not created '
                    ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }

            }
        } else {
            $this->response(array(
                'status' => 0,
                'message' => $validate_token['message']
            ), REST_Controller::HTTP_NOT_FOUND);
        }


    }

    /***
     * Delete a category with API
     * method : delete
     * @param $slug
     */
    public function deleteCategories_delete($slug)
    {
        header("Access-Control-Allow-Origin: *");
        //delete data method
        //echo 'post method';

        //load authorization Token library
        $this->load->library('Authorization_Token');

        $validate_token = $this->authorization_token->validateToken();
        /**
         * --------------------------------------------
         *                User validate token
         *----------------------------------------------
         */

        if (!empty($validate_token) && $validate_token['status'] == TRUE) {
            //form data value with xss
            $slug = $this->security->xss_clean($slug);


            /**
             *
             *  user_id -> login user id
             *  delete user with slug
             *
             */
            //form data validation

            //check post slug is  exist
            if (empty($slug)) {
                $this->response(array(
                    'status' => 0,
                    'message' => 'invalid any category data'
                ), REST_Controller::HTTP_NOT_FOUND);
            } else {


                //load category model

                //delete category
                $output = $this->category_model->delete_category($slug);
                //success
                if ($output > 0 && !empty($output)) {
                    $this->response(array(
                        'status' => 1,
                        'message' => 'delete category'
                    ), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        'status' => 0,
                        'message' => 'category not delete '
                    ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }

            }
        } else {
            $this->response(array(
                'status' => 0,
                'message' => $validate_token['message']
            ), REST_Controller::HTTP_NOT_FOUND);
        }

    }

    /***
     *
     * Update category with API
     *
     */
    public function updateCategories_post()
    {
        header("Access-Control-Allow-Origin: *");
        //insert data method
        //echo 'post method';

        //load authorization Token library
        $this->load->library('Authorization_Token');

        $validate_token = $this->authorization_token->validateToken();

        /**
         * --------------------------------------------
         *                User validate token
         *----------------------------------------------
         */
        if (!empty($validate_token) && $validate_token['status'] == TRUE) {
            //form data value with xss
            $_POST = $this->security->xss_clean($_POST);

            /**
             *
             *  user_id -> login user id
             *  parent_id -> the category child parent id
             *
             */
            //form data validation
            //form data validation
            $slug=$this->input->post('slug');
            $parent_id=$this->input->post('parent_id');
            $title=$this->input->post('title');
            if (empty($parent_id)) {
                $parent_id=NULL;
            }

            $title=$this->input->post('title');
            if($this->category_model->makeSlug($title) == $slug ) {
                $is_unique=",array('required' => 'نام گروه را وارد کنید', 'min_length' => 'نام گروه کمتر از 5 کاراکتر نباشد'";
            } else {
                $is_unique =  '|is_unique[categories.title],';
            }
            $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
            $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]'.$is_unique,
                array('required' => 'نام گروه را وارد کنید', 'min_length' => 'نام گروه کمتر از 5 کاراکتر نباشد'. $is_unique));
            //check form data validation
            if ($this->form_validation->run() == FALSE) {

                $this->response(array(
                    'status' => 0,
                    'error' => $this->form_validation->error_array(),
                    'message' => validation_errors()
                ), REST_Controller::HTTP_NOT_FOUND);
            } else {


                //load category model


                $parent_id=$this->input->post('parent_id');
                if (empty($parent_id)) {
                    $parent_id=NULL;
                }
                //insert category
                $title=$this->input->post('title');
                $insert_category_data =array(
                    'title'=>$this->input->post('title'),
                    'slug'=> $this->category_model->makeSlug($title),
                    'status'=> $this->input->post('status'),
                    'parent_id'=>$parent_id,
                    'user_id'=>$validate_token['data']->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                );
                $output = $this->category_model->update_category($insert_category_data,$slug);
                //success
                if ($output > 0 && !empty($output)) {
                    $this->response(array(
                        'status' => 1,
                        'message' => 'category add'
                    ), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        'status' => 0,
                        'message' => 'category not created '
                    ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }

            }
        } else {

            $this->response(array(
                'status' => 0,
                'message' => $validate_token['message']
            ), REST_Controller::HTTP_NOT_FOUND);
        }


    }
}