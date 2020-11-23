<?php defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	protected $user;
	public function get_users()
	{
		//select * from users
		$this->db->select();
		$this->db->from('users');
		$this->db->where('status',1);
		$query=$this->db->get();
		return $query->result();

	}

	public function insert_user($data=array())
	{
		return $this->db->insert('users',$data);
	}

	public function delete_user($id)
	{
		//delete method
		$this->db->where('id',$id);
	return	$this->db->delete('users');
	}

	public function update_user($data=array(),$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('users',$data);
	}

	public function user_login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('status',1);
		$query=$this->db->get('users');

		if ($query->num_rows()) {
		   $user_password=$query->row('password');
		   if (password_verify($password,$user_password)) {
		       return $query->row();
		   }
		}
		return null;

	}
}
