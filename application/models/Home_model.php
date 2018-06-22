<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_journals_list(){
		$this->db->select('j_id,title')->from('journals');
		$this->db->where('status',1);
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
	
	public  function save_newsletter($data){
		$this->db->insert('newsletters', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_already_email($email){
		$this->db->select('*')->from('newsletters');		
		$this->db->where('email',$email);
        return $this->db->get()->row_array();
	}
	
	/* out souce lab chating */
	

}