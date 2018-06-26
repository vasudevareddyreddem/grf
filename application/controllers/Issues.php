<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Issues extends CI_Controller {

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
		$this->load->model('Issues_model');
			if($this->session->userdata('userdetails'))
			{
				$admindetails=$this->session->userdata('userdetails');
				$data['userdetails']=$this->Admin_model->get_admin_details($admindetails['id']);
				//echo '<pre>';print_r($data);exit;
				$data['u_url']=base_url('issues');
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
			$this->load->view('admin/issues/add',$data);
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
			$data['issues_list']=$this->Issues_model->get_get_all_isseus_list($admindetails['id']);
			
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/Issues/list',$data);
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
			$i_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Issues_model->get_get_isseus_details($i_id);
			$data['journals_list']=$this->Journal_details_model->get_all_category_journal_list($admindetails['id'],$data['details']['journal_cat_id']);
			$data['journals_category_list']=$this->Journal_details_model->get_journal_category_list($admindetails['id']);
			
			foreach($data['details']['articles_list'] as $list){
				$a_ids[]=$list['article_id'];
			}
			$data['remaing_journals']=$this->Issues_model->get_all_remaining_article_list_for_issues($data['details']['journal_cat_id'],$data['details']['journal_id'],$data['details']['year'],$a_ids);

			//$rr=implode(',',$data['details']['articles_list']);
			//echo '<pre>';print_r($data);exit; 
			$this->load->view('admin/Issues/edit',$data);
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
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
								$temp = explode(".", $_FILES["image"]["name"]);
								$img = round(microtime(true)) . '.' . end($temp);
								move_uploaded_file($_FILES['image']['tmp_name'], "assets/issues/" . $img);
							}else{
								$img='';
							}
					$add_data=array(
					'number'=>isset($post['issue_number'])?$post['issue_number']:'',
					'image'=>$img,
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'year'=>isset($post['year_of_article'])?$post['year_of_article']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					$save=$this->Issues_model->save_issues($add_data);
						if(count($save)>0){
							foreach($post['article_ids'] as $list){
									$add_article_data=array(
										'i_a_id'=>$save,
										'article_id'=>$list,
										'status'=>1,
										'create_at'=>date('Y-m-d H:i:s'),
										'create_by'=>$admindetails['id'],
										);
										$this->Issues_model->save_issue_article_ids($add_article_data);
							}
							$this->session->set_flashdata('success',"Issue successfully Created");
							redirect('issues/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('issues');
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
				$issue=$this->Issues_model->get_issue_details($post['issue_id']);
						
					if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						$temp = explode(".", $_FILES["image"]["name"]);
						$img = round(microtime(true)) . '.' . end($temp);
						move_uploaded_file($_FILES['image']['tmp_name'], "assets/issues/" . $img);
					}else{
						$img=$issue['image'];
					}
					$update_data=array(
					'number'=>isset($post['issue_number'])?$post['issue_number']:'',
					'image'=>$img,
					'journal_cat_id'=>isset($post['category'])?$post['category']:'',
					'journal_id'=>isset($post['journal'])?$post['journal']:'',
					'year'=>isset($post['year_of_article'])?$post['year_of_article']:'',
					'status'=>1,
					'create_at'=>date('Y-m-d H:i:s'),
					'create_by'=>$admindetails['id'],
					);
					
					$update=$this->Issues_model->update_issues_details($post['issue_id'],$update_data);
					if(count($update)>0){
						$get_article_list=$this->Issues_model->get_articles_list($post['issue_id']);
								if(count($get_article_list)>0){
										foreach($get_article_list as $lis){
											$this->Issues_model->delete_article($lis['issue_a_id']);
										}
								}
									
						
							foreach($post['article_ids'] as $list){
									$add_article_data=array(
										'i_a_id'=>$post['issue_id'],
										'article_id'=>$list,
										'status'=>1,
										'create_at'=>date('Y-m-d H:i:s'),
										'create_by'=>$admindetails['id'],
										);
										$this->Issues_model->save_issue_article_ids($add_article_data);
							}
							$this->session->set_flashdata('success',"Issue successfully Updated");
							redirect('issues/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('issues');
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
					$update=$this->Issues_model->update_issues_details($f_id,$update_data);
						if(count($update)>0){
							if($status==1){
							$this->session->set_flashdata('success',"Issue successfully deactivated");
							}else{
							$this->session->set_flashdata('success',"Issue successfully activated");
							}
							redirect('issues/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('issues/lists');
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
			$i_id=base64_decode($this->uri->segment(3));
			$issue=$this->Issues_model->get_issue_details($i_id);
			$get_article_list=$this->Issues_model->get_articles_list($issue['id']);
			if(count($get_article_list)>0){
					foreach($get_article_list as $lis){
						$this->Issues_model->delete_article($lis['issue_a_id']);
					}
			}
			$delete=$this->Issues_model->delete_issues($issue['id']);
					if(count($delete)>0){
						unlink('assets/issues/'.$issue['image']);

						$this->session->set_flashdata('success',"Issue successfully deleted");
						redirect('issues/lists');
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('issues/lists');
					}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
		
	}
	
	public  function get_article_list_for_issues(){
		$post=$this->input->post();
		$details=$this->Issues_model->get_all_article_list_for_issues($post['cate_id'],$post['jou_id'],$post['year']);
		$issue_wise_article_list=$this->Issues_model->get_all_issues_list_for_issues($post['cate_id'],$post['jou_id'],$post['year']);
			
		//echo '<pre>';print_r($issue_wise_article_list);
			if(count($issue_wise_article_list)>0){
					foreach($issue_wise_article_list  as $list){
						$article_list[]=$this->Issues_model->get_all_article_list($list['id']);
					}
					
					foreach($article_list as $li){
						foreach($li as $lis){
							$ids[]=$lis['article_id'];
						}
					}
					foreach($details as $l){
						if (in_array($l['a_id'], $ids))
						  {
						  unset($l['a_id']);
						  }else{
							  $ddd[]=$l;
						  }
						//echo '<pre>';print_r($l);exit;
					}
			}else{
				
				$ddd=$details;
			}
		
		if(isset($ddd) && count($ddd) > 0)
				{
				$data['msg']=1;
				$data['list']=$ddd;
				echo json_encode($data);exit;	
				}else{
					$data['msg']=2;
					echo json_encode($data);exit;
				}
		
	}
	
	
	
}
