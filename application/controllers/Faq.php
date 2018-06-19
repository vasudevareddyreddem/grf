<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

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
		$this->load->model('Faq_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('faq');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$this->load->view('admin/faq/add');
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
			$data['updates_list']=$this->Faq_model->get_faqs_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/faq/list',$data);
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
			$data['details']=$this->Faq_model->get_faq_details($f_id);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/faq/edit',$data);
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
					'question'=>isset($post['question'])?$post['question']:'',
					'description'=>isset($post['description'])?$post['description']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Faq_model->save_faq($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success',"Faq's successfully Added");
							redirect('faq/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('faq');
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
							'question'=>isset($post['question'])?$post['question']:'',
							'description'=>isset($post['description'])?$post['description']:'',
							'update_at'=>date('Y-m-d H:i:s'),
							);
						$update=$this->Faq_model->update_faq_details($post['f_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success',"Faq's successfully Updated");
							redirect('faq/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('faq/lists');
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
					$update=$this->Faq_model->update_faq_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Faq's successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"Faq's successfully activated");
							}
							redirect('faq/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('faq/lists');
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
			
					$delete=$this->Faq_model->delete_updates($f_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success',"Faq's successfully deleted");
						redirect('faq/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('faq/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
