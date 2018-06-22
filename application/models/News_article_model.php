<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_article_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_news($data){
		$this->db->insert('news_article', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_news_list($id){
		$this->db->select('*')->from('news_article');		
		$this->db->where('news_article.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_news_details($id){
		$this->db->select('*')->from('news_article');		
		$this->db->where('id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_news_details($id,$data){
		$this->db->where('id',$id);
    	return $this->db->update("news_article",$data);
	}
	public function delete_news($id){
		$this->db->where('id', $id);
		return $this->db->delete('news_article');
	}
	

}