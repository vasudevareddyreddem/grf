<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_procedures extends CI_Controller {

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
		$this->load->model('Article_procedures_model');
		$this->load->model('Journal_details_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('article-procedures');
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
			
			$this->load->view('admin/article_procedures/add',$data);
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
			$data['conference_list']=$this->Article_procedures_model->get_article_procedures_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/article_procedures/list',$data);
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
			$data['details']=$this->Article_procedures_model->get_article_procedures_details($f_id);
			$data['journals_list']=$this->Journal_details_model->get_all_category_journal_list($admindetails['id'],$data['details']['journal_cat_id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/article_procedures/edit',$data);
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
			if(isset($_FILES['pdf_file']['name']) && $_FILES['pdf_file']['name']!=''){
								$temp = explode(".", $_FILES["pdf_file"]["name"]);
								$pdf = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['pdf_file']['tmp_name'], "assets/article_procedures/" . $pdf);
							}else{
								$pdf='';
							}
							if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								$temp = explode(".", $_FILES["image"]["name"]);
								$img = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/article_procedures/" . $img);
							}else{
								$img='';
							}
					$add_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'year_of_article'=>isset($post['year_of_article'])?$post['year_of_article']:'',
					'procedures_category'=>isset($post['procedures_category'])?$post['procedures_category']:'',
					'conference_title'=>isset($post['conference_title'])?$post['conference_title']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'author_name'=>isset($post['author_name'])?$post['author_name']:'',
					'doi_url'=>isset($post['doi_url'])?$post['doi_url']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					'abstract'=>isset($_REQUEST['abstract'])?$_REQUEST['abstract']:'',
					'biography'=>isset($_REQUEST['biography'])?$_REQUEST['biography']:'',					
					'pdf_file'=>$pdf,
					'image'=>$img,
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Article_procedures_model->save_article_procedures($add_data);
						if(count($save)>0){
							$this->session->set_flashdata('success','Article procedures successfully Added');
							redirect('article-procedures/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('article-procedures');
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
			$details=$this->Article_procedures_model->get_article_procedures_details($post['a_id']);
											
							if(isset($_FILES['pdf_file']['name']) && $_FILES['pdf_file']['name']!=''){
								unlink('assets/article_procedures/'.$details['pdf_file']);
								$temp = explode(".", $_FILES["pdf_file"]["name"]);
								$pdf = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['pdf_file']['tmp_name'], "assets/article_procedures/" . $pdf);
							}else{
								$pdf=$details['pdf_file'];
							}
							if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								unlink('assets/article_procedures/'.$details['image']);
								$temp = explode(".", $_FILES["image"]["name"]);
								$img = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/article_procedures/" . $img);
							}else{
								$img=$details['image'];
							}
			$post=$this->input->post();
					$update_data=array(
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'year_of_article'=>isset($post['year_of_article'])?$post['year_of_article']:'',
					'procedures_category'=>isset($post['procedures_category'])?$post['procedures_category']:'',
					'conference_title'=>isset($post['conference_title'])?$post['conference_title']:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'author_name'=>isset($post['author_name'])?$post['author_name']:'',
					'doi_url'=>isset($post['doi_url'])?$post['doi_url']:'',
					'seo_url'=>isset($post['seo_url'])?$post['seo_url']:'',
					'seo_title'=>isset($post['seo_title'])?$post['seo_title']:'',
					'seo_keyword'=>isset($post['seo_keyword'])?$post['seo_keyword']:'',
					'seo_description'=>isset($post['seo_description'])?$post['seo_description']:'',
					'abstract'=>isset($_REQUEST['abstract'])?$_REQUEST['abstract']:'',
					'biography'=>isset($_REQUEST['biography'])?$_REQUEST['biography']:'',					
					'pdf_file'=>$pdf,
					'image'=>$img,
					'update_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Article_procedures_model->update_article_procedures_details($post['a_id'],$update_data);
						if(count($update)>0){
							$this->session->set_flashdata('success','Article procedures successfully Updated');
							redirect('article-procedures/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('article-procedures/edit/'.base64_encode($post['a_id']));
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
					$update=$this->Article_procedures_model->update_article_procedures_details($a_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success','Article procedures successfully deactivated');
							}else{
							$this->session->set_flashdata('success','Article procedures successfully activated');
							}
							redirect('article-procedures/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('article-procedures/lists');
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
				$details=$this->Article_procedures_model->get_article_procedures_details($f_id);
				$delete=$this->Article_procedures_model->delete_article_procedures($f_id);
					if(count($delete)>0){
						unlink('assets/article_procedures/'.$details['pdf_file']);
						unlink('assets/article_procedures/'.$details['image']);
						$this->session->set_flashdata('success','Article procedures successfully deleted');
						redirect('article-procedures/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('article-procedures/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	
	
}
