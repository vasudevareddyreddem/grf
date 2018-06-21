<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guidelines extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->model('Guidelines_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('Guidelines');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$this->load->view('admin/guidelines/add');
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function lists()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['guidelines_list']=$this->Guidelines_model->get_guidelines_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/guidelines/list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function edit()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$f_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Guidelines_model->get_guidelines_details($f_id);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/guidelines/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function addpost()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
					$add_data=array(
					'pagename'=>isset($post['pagename'])?$post['pagename']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Guidelines_model->save_guidelines($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success',"Guideline successfully Added");
							redirect('guidelines/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('guidelines');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function editpost()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$update_data=array(
							'pagename'=>isset($post['pagename'])?$post['pagename']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					
							'update_at'=>date('Y-m-d H:i:s'),
							);
						$update=$this->Guidelines_model->update_guidelines_details($post['g_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Guideline successfully Updated");
							redirect('guidelines/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('guidelines/lists');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function status()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$f_id=base64_decode($this->uri->segment(3));
			$status=base64_decode($this->uri->segment(4));
			if($status==1){
				$stat=0;
			}else{
				$stat=1;
			}
			$update_data=array(
					'status'=>$stat,
					'update_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Guidelines_model->update_guidelines_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Guideline successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"Guideline successfully activated");
							}
							redirect('guidelines/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('guidelines/lists');
						}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	public function delete()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$f_id=base64_decode($this->uri->segment(3));
			
					$delete=$this->Guidelines_model->delete_guidelines($f_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success',"Guideline successfully deleted");
						redirect('guidelines/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('guidelines/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
