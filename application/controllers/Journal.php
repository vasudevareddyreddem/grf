<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal extends CI_Controller {

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
		$this->load->model('Journal_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('journal');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$this->load->view('admin/journal-category/add');
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
			$data['category_list']=$this->Journal_model->get_journal_list_details($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/journal-category/list',$data);
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
			$c_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Journal_model->get_category_details($c_id);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/journal-category/edit',$data);
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
				$details=$this->Journal_model->check_category_exits($post['category']);
				if(count($details)>0){
					$this->session->set_flashdata('error',"Journal category name already exists. Please use another one.");
							redirect('journal');	
				}
				//echo '<pre>';print_r($post);exit;
				$add_data=array(
					'category'=>isset($post['category'])?$post['category']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Journal_model->save_journal_category($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Journal category successfully Added');
							redirect('journal/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal');
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
			
					//echo '<pre>';print_r($post);exit;
					$details=$this->Journal_model->get_category_details($post['c_id']);
					if($details['category']!=$post['category']){
						$new_details=$this->Journal_model->check_category_exits($post['category']);
						if(count($new_details)>0){
							$this->session->set_flashdata('error',"Journal category name already exists. Please use another one.");
									redirect('journal/edit/'.base64_encode($post['c_id']));	
						}
					}
					$update_data=array(
					'category'=>isset($post['category'])?$post['category']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'update_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Journal_model->update_category_details($post['c_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Journal category successfully Updated');
							redirect('journal/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal/lists');
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
			$c_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Journal_model->update_category_details($c_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Journal category successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Journal category successfully activated');
							}
							redirect('journal/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('journal/lists');
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
			$c_id=base64_decode($this->uri->segment(3));
			$details=$this->Journal_model->get_category_details($c_id);
			
					$delete=$this->Journal_model->delete_journal_category($c_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success','Journal category successfully deleted');
						redirect('journal/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('journal/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
