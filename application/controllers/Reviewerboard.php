<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewerboard extends CI_Controller {

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
		$this->load->model('Journal_details_model');
		$this->load->model('Reviewerboard_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('Reviewerboard');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);

			$this->load->view('admin/reviewerboard/add',$data);
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
			$data['reviewers_list']=$this->Reviewerboard_model->get_revirewers_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/reviewerboard/list',$data);
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
			$data['details']=$this->Reviewerboard_model->get_reviewer_details($f_id);
			$data['journals_list']=$this->Journal_details_model->get_all_category_journal_list($admindetails['id'],$data['details']['category']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);

			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/reviewerboard/edit',$data);
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
					'category'=>isset($post['category'])?$post['category']:'',
					'journal'=>isset($post['journal'])?$post['journal']:'',
					'name'=>isset($post['name'])?$post['name']:'',
					'university'=>isset($post['university'])?$post['university']:'',
					'country'=>isset($post['country'])?$post['country']:'',
					'reviewer_board'=>isset($post['reviewer_board'])?$post['reviewer_board']:'',
					'status'=>1,
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Reviewerboard_model->save_reviwes($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success',"Reviewer board successfully Added");
							redirect('reviewerboard/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('reviewerboard');
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
							'category'=>isset($post['category'])?$post['category']:'',
							'journal'=>isset($post['journal'])?$post['journal']:'',
							'name'=>isset($post['name'])?$post['name']:'',
							'university'=>isset($post['university'])?$post['university']:'',
							'country'=>isset($post['country'])?$post['country']:'',
							'reviewer_board'=>isset($post['reviewer_board'])?$post['reviewer_board']:'',
							);
						$update=$this->Reviewerboard_model->update_reviewer_details($post['r_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Reviewer board successfully Updated");
							redirect('reviewerboard/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('reviewerboard/lists');
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
					);
					$update=$this->Reviewerboard_model->update_reviewer_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Reviewer board successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"Reviewer board successfully activated");
							}
							redirect('reviewerboard/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('reviewerboard/lists');
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
			
					$delete=$this->Reviewerboard_model->delete_Reviewer($f_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success',"Reviewer board successfully deleted");
						redirect('reviewerboard/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('reviewerboard/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
