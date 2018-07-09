<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unsubscribe extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->model('Home_model');
		$this->load->model('Unsubscribes_model');
			
			
	}
	public function index()
	{	
		$header['c_url']=base_url('unsubscribe');
		$header['scroll_data']=$this->Home_model->get_scrolling_content();
		$this->load->view('html/header',$header);
		$data['flyers_list']=$this->Home_model->get_flyers_list();
		$data['journals_list']=$this->Home_model->get_peer_review_process_journals_list();
		$this->load->view('html/unsubscribe',$data);
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/footer');
		
		
	}
	public  function post(){
		
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$update_data=array(
							'name'=>$post['firstName'].' '.$post['lastName'],
							'email'=>isset($post['email'])?$post['email']:'',
							'reason'=>isset($post['reason'])?$post['reason']:'',
							'status'=>0,
							);
							$update=$this->Unsubscribes_model->update_unsubscribes_details_with_email($update_data);
									if(count($update)>0){
										$this->session->set_flashdata('success',"Unsubscribed successfully");
										redirect('unsubscribe');
										
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('unsubscribe');
									}
									
							
		
	}
	
	
}
