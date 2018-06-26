<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	
	public  function get_scrolling_content(){
		$this->db->select('*')->from('home_scroll');		
        return $this->db->get()->row_array();
	}
	public function get_journals_list(){
		$this->db->select('*')->from('admin_journel');
		return $this->db->get()->result_array();	
	}
	
	public function save_contactus($data){
		$this->db->insert('contactus', $data);
			return $insert_id = $this->db->insert_id();
	}
	
	public function save_menuscript($data){
		$this->db->insert('menuscript_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function login_details($data){
		$sql = "SELECT * FROM admin WHERE (email ='".$data['email']."' AND password='".$data['password']."' AND status=1) OR (username ='".$data['email']."' AND password='".$data['password']."' AND status=1)";
		return $this->db->query($sql)->row_array();	
	}
	public function email_check_details($email){
		$sql = "SELECT * FROM admin WHERE a_email_id ='".$email."'";
		return $this->db->query($sql)->row_array();	
	}
	
	public function get_admin_details($admin_id){
		$this->db->select('*')->from('admin');		
		$this->db->where('id', $admin_id);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();	
	}
	public function get_adminpassword_details($admin_id){
		$this->db->select('admin.password')->from('admin');		
		$this->db->where('id', $admin_id);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();	
	}
	public function check_email_exits($email){
		$this->db->select('*')->from('admin');		
		$this->db->where('email', $email);
        return $this->db->get()->row_array();	
	}
	public  function update_profile_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("admin",$data);
	}
	
	public  function get_category_wise_journals_list($cat){
		$this->db->select('j_id,title')->from('journals');		
		$this->db->where('category', $cat);
		$this->db->where('status', 1);
        return $this->db->get()->result_array();	
	}
	
	
	/* dashboad purpose*/
	
	public  function get_category_count($id){
		$this->db->select('COUNT(c_id) AS count')->from('grf_journal_category');		
		$this->db->where('create_by', $id);
        return $this->db->get()->row_array();
	}
	public  function get_journal_count($id){
		$this->db->select('COUNT(j_id) AS count')->from('journals');		
		$this->db->where('create_by', $id);
        return $this->db->get()->row_array();
	}
	public  function get_article_count($id){
		$this->db->select('COUNT(a_id) AS count')->from('journal_article_in_press');		
		$this->db->where('create_by', $id);
        return $this->db->get()->row_array();
	}
	public  function get_editors_count($id){
		$this->db->select('COUNT(j_e_id) AS count')->from('journal_editors');		
		$this->db->where('create_by', $id);
        return $this->db->get()->row_array();
	}
	/* dashboad purpose*/
	
	

}