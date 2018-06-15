<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 

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
	
	
	/* out souce lab chating */
	

}