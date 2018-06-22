<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unsubscribes extends CI_Controller {

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
		$this->load->model('Unsubscribes_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('Unsubscribes');
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
			
	}
	public function index()
	{	
		if($this->session->userdata('userdetails'))
		{
			$data['unsubscribes_list']=$this->Unsubscribes_model->get_unsubscribes_list_details();
			$this->load->view('admin/unsubscribes',$data);
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
			$data['details']=$this->Unsubscribes_model->get_unsubscribes_details($f_id);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/unsubscribes_edit',$data);
			$this->load->view('admin/footer');
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
							'name'=>isset($post['name'])?$post['name']:'',
							'email'=>isset($post['email'])?$post['email']:'',
							);
							$check=$this->Unsubscribes_model->get_already_email($post['email']);
							
							if(count($check)==0){
									$update=$this->Unsubscribes_model->update_unsubscribes_details($post['u_id'],$update_data);
									if(count($update)>0){
										$this->session->set_flashdata('success',"Newsletters successfully Updated");
										redirect('unsubscribes');
										
									}else{
										$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
										redirect('unsubscribes');
									}
									
							}else{
								$this->session->set_flashdata('error','Email id already Newsletters subscribed. Please use another Email id');
								redirect('unsubscribes');
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
					$update=$this->Unsubscribes_model->update_unsubscribes_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Newsletters successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"Newsletters successfully activated");
							}
							redirect('unsubscribes');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('unsubscribes');
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
			
					$delete=$this->Unsubscribes_model->delete_unsubscribes($f_id);
					if(count($delete)>0){
						$this->session->set_flashdata('success',"Newsletters successfully deleted");
						redirect('unsubscribes');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('unsubscribes');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
}
