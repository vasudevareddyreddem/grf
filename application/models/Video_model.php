<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_video($data){
		$this->db->insert('videoarticle', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_videos_list($id){
		$this->db->select('*')->from('videoarticle');		
		$this->db->where('videoarticle.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_video_details($v_id){
		$this->db->select('*')->from('videoarticle');		
		$this->db->where('v_id',$v_id);
        return $this->db->get()->row_array();	
	}
	public function update_video_details($id,$data){
		$this->db->where('v_id',$id);
    	return $this->db->update("videoarticle",$data);
	}
	public function delete_video($id){
		$this->db->where('v_id', $id);
		return $this->db->delete('videoarticle');
	}
	

}