<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function all_users()
    {
          $query = $this->db->query("SELECT * FROM users");
        return $query->result_array();
    }

    public function delete_user($id)
    {
        $query="DELETE FROM `users` WHERE id=$id";
        $this->db->query($query);
    }
}