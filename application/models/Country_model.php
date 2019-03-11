<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Country_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_country($data){
		$this->db->insert('country_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_countries_list($id){
		$this->db->select('*')->from('country_list');		
		$this->db->where('country_list.create_by',$id);
        return $this->db->get()->result_array();	
	}
	
	public function delete_updates($id){
		$this->db->where('c_id', $id);
		return $this->db->delete('country_list');
	}
	

}