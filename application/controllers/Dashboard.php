<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar',$data);
			}
	}
	public function index()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['category_count']=$this->Admin_model->get_category_count($admindetails['id']);
			$data['journal_count']=$this->Admin_model->get_journal_count($admindetails['id']);
			$data['article_count']=$this->Admin_model->get_article_count($admindetails['id']);
			$data['editors_count']=$this->Admin_model->get_editors_count($admindetails['id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('admin/dashboard',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function profile()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
			$this->load->view('admin/profile',$data);
			$this->load->view('admin/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepassword()
	{
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
				$this->load->view('html/changepassword');
				$this->load->view('html/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepasswordpost(){
	 
		if($this->session->userdata('userdetails'))
		{
			$admindetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$admin_details = $this->Admin_model->get_adminpassword_details($admindetails['a_id']);
			if($admin_details['a_password']== md5($post['oldpassword'])){
				if(md5($post['password'])==md5($post['confirmpassword'])){
						$updateuserdata=array(
						'a_password'=>md5($post['confirmpassword']),
						'a_org_password'=>$post['confirmpassword'],
						'a_updated_at'=>date('Y-m-d H:i:s'),
						);
						//echo '<pre>';print_r($updateuserdata);exit;
						$upddateuser = $this->Admin_model->update_admin_details($admindetails['a_id'],$updateuserdata);
						if(count($upddateuser)>0){
							$this->session->set_flashdata('success',"password successfully updated");
							redirect('dashboard/changepassword');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('dashboard/changepassword');
						}
					
				}else{
					$this->session->set_flashdata('error',"Password and Confirm password are not matched");
					redirect('dashboard/changepassword');
				}
				
			}else{
				$this->session->set_flashdata('error',"Old password are not matched");
				redirect('dashboard/changepassword');
			}
				
			
		}else{
			 $this->session->set_flashdata('error','Please login to continue');
			 redirect('');
		} 
	 
	}
	public function logout(){
		$admindetails=$this->session->userdata('userdetails');
		$userinfo = $this->session->userdata('userdetails');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('userdetails');
		$this->session->unset_userdata('userdetails');
        redirect('admin');
	}
	
	public function emps(){
		
		
		/*test*/
		$this->zend->load('Zend/Barcode');
		//generate barcode
		
		/*test*/
		
		$filename = $this->security->sanitize_filename($this->input->post('name'), TRUE);
		$data=array('d_name'=>$filename);
		$logindatasave = $this->Doctor_model->save_doctors($data);
		
		
		
		$file = Zend_Barcode::draw('code128', 'image', array('text' => $logindatasave), array());
		$code = time().$logindatasave;
		 $store_image1 = imagepng($file, $this->config->item('documentroot')."assets/barcodes/{$code}.png");
			
		$this->Doctor_model->update_doctors_details($logindatasave,$code);
		//echo '<pre>';print_r($test);
		
		
	}
	
	
	
}
