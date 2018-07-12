<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Special_issue extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url', 'file'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->model('Admin_model');
		$this->load->model('Journal_details_model');
		$this->load->model('Special_issue_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('special-issue');
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
			$this->load->view('admin/special_issues/add',$data);
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
			$data['special_isses_list']=$this->Special_issue_model->get_special_issue_list($admindetails['id']);
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/special_issues/list',$data);
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
			$data['details']=$this->Special_issue_model->get_special_issue_details($f_id);
			$data['journals_list']=$this->Journal_details_model->get_all_category_journal_list($admindetails['id'],$data['details']['journal_cat_id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/special_issues/edit',$data);
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
			//echo '<pre>';print_r($_REQUEST);exit;
					$add_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'details'=>isset($post['details'])?$post['details']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'update_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Special_issue_model->save_special_issues($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success',"Special Issue successfully Added");
							redirect('special-issue/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('special-issue');
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
			
			//echo '<pre>';print_r($_REQUEST);exit;
			$update_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'details'=>isset($_REQUEST['details'])?$_REQUEST['details']:'',
					'update_at'=>date('Y-m-d H:i:s'),
					);
					//echo '<pre>';print_r($update_data);exit;
						$update=$this->Special_issue_model->update_special_issue_details($post['issue_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Special Issue successfully Updated");
							redirect('special-issue/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('special-issue/lists');
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
					$update=$this->Special_issue_model->update_special_issue_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Special Issue successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"Special Issue successfully activated");
							}
							redirect('special-issue/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('special-issue/lists');
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
			
					$delete=$this->Special_issue_model->delete_special_issue($f_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success',"Special Issue successfully deleted");
						redirect('special-issue/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('special-issue/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
