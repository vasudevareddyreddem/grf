<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
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
	

}