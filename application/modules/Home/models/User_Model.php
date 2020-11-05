<?php
class User_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
      $res= $result=$this->db->insert('users',$data);
      return $res;
    }
    public function login($data) {

    }
}