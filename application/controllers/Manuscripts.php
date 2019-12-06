<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manuscripts extends CI_Controller {

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
		$this->load->model('Manuscripts_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('testimonial');
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
			
			$this->load->view('admin/manuscripts/add',$data);
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
			$data['men_list']=$this->Manuscripts_model->get_manuscripts_list($admindetails['id']);
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/manuscripts/list',$data);
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
			$data['journals_list']=$this->Journal_details_model->get_all_journal_list($admindetails['id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			$data['details']=$this->Manuscripts_model->get_manuscripts_details($f_id);			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/manuscripts/edit',$data);
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
					$check=$this->Manuscripts_model->check_manuscript_exits($post['journal']);
					if(count($check)>0){
						$this->session->set_flashdata('error',"Already exists. Please try again.");
						redirect('manuscripts');
					}
					$add_data=array(
					'category'=>isset($post['category'])?$post['category']:'',
					'journal'=>isset($post['journal'])?$post['journal']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'subtitle'=>isset($post['subtitle'])?$post['subtitle']:'',
					'link'=>isset($post['link'])?$post['link']:'',
					'text'=>isset($post['text'])?$post['text']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Manuscripts_model->save_manuscripts($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Manuscript successfully Added');
							redirect('manuscripts/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('manuscripts');
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
			$details=$this->Manuscripts_model->get_manuscripts_details($post['m_l_id']);
			if($details['journal']!=$post['journal']){
				$check=$this->Manuscripts_model->check_manuscript_exits($post['journal']);
					if(count($check)>0){
						$this->session->set_flashdata('error',"Already exists. Please try again.");
						redirect('manuscripts/edit/'.base64_encode($post['m_l_id']));
					}
			}
			//echo '<pre>';print_r($post);exit;
			$update_data=array(
				'category'=>isset($post['category'])?$post['category']:'',
				'journal'=>isset($post['journal'])?$post['journal']:'',
				'title'=>isset($post['title'])?$post['title']:'',
				'subtitle'=>isset($post['subtitle'])?$post['subtitle']:'',
				'link'=>isset($post['link'])?$post['link']:'',
				'text'=>isset($post['text'])?$post['text']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'update_at'=>$admindetails['id'],
				);
			$update=$this->Manuscripts_model->update_manuscripts_details($post['m_l_id'],$update_data);
			if(count($update)>0){
				$this->session->set_flashdata('success','Manuscript successfully Updated');
				redirect('manuscripts/lists');				
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('manuscripts/edit/'.base64_encode($post['m_l_id']));
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
			$t_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Manuscripts_model->update_manuscripts_details($t_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Manuscript successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Manuscript successfully activated');
							}
							redirect('manuscripts/lists');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('manuscripts/lists');
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
			$t_id=base64_decode($this->uri->segment(3));
			$delete=$this->Manuscripts_model->delete_manuscripts($t_id);
			if(count($delete)>0){
				$this->session->set_flashdata('success','Manuscript successfully deleted');
				redirect('manuscripts/lists');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('manuscripts/lists');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
