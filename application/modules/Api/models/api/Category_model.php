<?php defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	protected $category_table = 'categories';

    /***
     * @param string : title name
     * @return  string : slug
     */
	public function makeSlug($string)
	{
		return preg_replace('/\s+/u', '-', trim($string));
	}

    /***
     *   get all categories table
     */

    public function get_categories()
    {
        $query = $this->db->get($this->category_table);
       return $query->result_array();
    }


	/***
	 *
	 * --> add new category with API
	 * @param array categories
	 *
	 * @return  true or false
	 */

	public function create_category(array $data)
	{

		$this->db->insert($this->category_table, $data);
		return $this->db->insert_id();
	}


	/***
	 *
	 * update categories table
	 * @param array $data = slug
	 * @param $slug
	 */
	public function update_category(array $data,$slug){

		$this->db->where('slug', $slug);
		return $this->db->update($this->category_table, $data);
	}




	/***
	 *
	 * delete category with API
	 * @param array = slug
	 *
	 * @return false
	 */

	public function delete_category($data)
	{
		/***
		 *
		 *  check category exist in table and if exist delete it
		 */

		$category=$this->db->where('slug',$data)->get($this->category_table)->num_rows();
		$query=$this->db->where('slug',$data);
		if ($category>0) {
			return	$this->db->delete($this->category_table);
		}
		return false;

	}

	/***
	 * return category id
	 * @param $slug
	 * @return : categoryId
	 */
	public function findBySlug($slug)
	{
		$this->db->where('slug',$slug);
		$query=$this->db->get($this->category_table);
		return$query->row();
	}


}
