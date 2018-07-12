<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_in_process_fee extends CI_Controller {

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
		$this->load->model('Article_in_process_fee_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('Article-in-process-fee');
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
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/article_in_process_fee/add',$data);
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
			$data['article_in_process_fee_list']=$this->Article_in_process_fee_model->get_article_in_press_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/article_in_process_fee/list',$data);
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
			$a_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Article_in_process_fee_model->get_article_in_process_details($a_id);
			$data['journals_list']=$this->Journal_details_model->get_all_category_journal_list($admindetails['id'],$data['details']['journal_cat_id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/article_in_process_fee/edit',$data);
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
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'table'=>isset($_REQUEST['tables'])?$_REQUEST['tables']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'update_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Article_in_process_fee_model->save_article_in_process_fee($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Article in Process Fee successfully Added');
							redirect('Article-in-process-fee/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('Article-in-process-fee');
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
								'journal_id'=>isset($post['journal'])?$post['journal']:'',
								'journal_cat_id'=>isset($post['category'])?$post['category']:'',
								'table'=>isset($_REQUEST['table'])?$_REQUEST['table']:'',
								'update_at'=>date('Y-m-d H:i:s'),
								);
								
								//echo '<pre>';print_r($post);exit;
						$update=$this->Article_in_process_fee_model->update_Article_in_process_fee_details($post['a_id'],$update_data);
						//echo $this->db->last_query();exit;
						if(count($update)>0){
							$this->session->set_flashdata('success','Article in Process Fee successfully Updated');
							redirect('Article-in-process-fee/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('Article-in-process-fee/edit/'.base64_encode($post['a_id']));
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
			$a_id=base64_decode($this->uri->segment(3));
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
					$update=$this->Article_in_process_fee_model->update_Article_in_process_fee_details($a_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Article in Process Fee successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Article in Process Fee successfully activated');
							}
							redirect('Article-in-process-fee/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('Article-in-process-fee/lists');
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
			$a_id=base64_decode($this->uri->segment(3));
			
					$delete=$this->Article_in_process_fee_model->delete_article_in_process_fee($a_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success','Article in Process Fee successfully deleted');
						redirect('Article-in-process-fee/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('Article-in-process-fee/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
