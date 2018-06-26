
<?php //echo '<pre>';print_r($remaing_journals);exit; ?>
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Issue 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit Issue</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Issue</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" method="post" onsubmit="return checkvalidation();" class="" action="<?php echo base_url('issues/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
					<input type="hidden" id="issue_id" name="issue_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>">

					<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Issue Number</label>
								<div class="">
									<input type="text" class="form-control" name="issue_number" value="<?php echo isset($details['number'])?$details['number']:''; ?>" id="issue_number" placeholder="Enter Issue Number" />
								</div>
							</div>
                        </div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Select Image</label>
								<div class="">
									<input type="file" class="form-control" name="image" id="image" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Category</label>
								<div class="">
									 <select class="form-control" id="category" onchange="get_gournals(this.value);" name="category">
									  <option value="">Select</option>
									 <?php foreach($journals_category_list as $list){ ?>
										 <?php if($details['journal_cat_id']==$list['c_id']){ ?>
											<option selected value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>
										 <?php }else{ ?>
									 		<option value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>

											<?php } ?>
									<?php } ?>
									</select>
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Select Journal</label>
								<div class="">
									 <select class="form-control" id="journal" name="journal">
									  <option value="">Select</option>
									 <?php foreach($journals_list as $list){ ?>
									 <?php if($details['journal_id']==$list['j_id']){ ?>
										<option selected value="<?php echo $list['j_id']; ?>"><?php echo $list['title']; ?></option>
									 <?php }else{ ?>
									 		<option value="<?php echo $list['j_id']; ?>"><?php echo $list['title']; ?></option>

									 <?php } ?>

									<?php } ?>
									</select>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Years of article </label>
								<div class="">
									 <select class="form-control" id="year_of_article" onchange="get_article_list(this.value);" name="year_of_article">
									  <option value="">Select</option>
									  <?php
								  $currently_selected = date('Y'); 
								  $earliest_year = 1950; 
								  $latest_year = date('Y');  ?>

									<?php foreach ( range( $latest_year, $earliest_year ) as $i ) { ?>
									 <?php if($details['year']==$i){ ?>
											<option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
									 <?php }else{ ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									 <?php } ?>
									<?php } ?>
									</select>
									
								
																	
								</div>
							</div>
                        </div>
					
						<div class="col-md-6" id="" style="">
							<div class="form-group">
								<label class=" control-label">Archieve List</label>
								<div class="">
								<span id="" >
								<?php foreach($details['articles_list'] as $list){ ?>
								<input  type="checkbox" name="article_ids[]" checked value="<?php echo $list['article_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $list['title']; ?><br>
								
								<?php } ?>
								</span>
								<span id="archieve_show">
								<span id="archieve_list">
								<?php foreach($remaing_journals as $list){ ?>
								<input  type="checkbox" name="article_ids[]" value="<?php echo $list['article_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $list['title']; ?><br>
								
								<?php } ?>
								
								</span>
								</span>
								</div>
							</div>
                        </div>
						
						
						
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" id="test" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('dashboard'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
                            </div>
                        </div>
						
						
                    </form>
					<div class="clearfix">&nbsp;</div>
          </div>
          </div>
          <!-- /.box -->

         

        </div>
      
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section> 
</div>
  <script type="text/javascript">
  
  function checkvalidation(){
	  var inputList = document.getElementsByTagName("input");
        var numChecked = 0;

        for (var i = 0; i < inputList.length; i++) {
            if (inputList[i].type == "checkbox" && inputList[i].checked) {
                numChecked = numChecked + 1;
            }
        }
		if(numChecked > 5 || numChecked==0){
			alert('Please select maximum 5 or lessthan 5');
			 document.getElementById("test").disabled = false; 
			return false;
			
		}else{
			return true;
		}
	 
	 
  }
	

  function get_article_list(year){
	 var cat_id=$('#category').val();
	 var journal_id=$('#journal').val();
	 if(cat_id!='' && journal_id!=''&& year!=''){
			jQuery.ajax({
   					url: "<?php echo base_url('issues/get_article_list_for_issues');?>",
   					data: {
   						cate_id: cat_id,
   						jou_id: journal_id,
						year: year,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						$('#archieve_show').show();
   						$('#archieve_list').empty();
   						for(i=0; i<data.list.length; i++) {
   							$('#archieve_list').append("<input type='checkbox' name='article_ids[]' value="+data.list[i].a_id+">&nbsp;&nbsp;&nbsp;&nbsp;"+data.list[i].title+"<br>");                      
                         
   						}
   						//console.log(data);return false;
   					}
   				
   				});
				
			}
	  
  }
$(document).ready(function() {
    $('#addflyer').bootstrapValidator({
        
        fields: {
             journal: {
                validators: {
					notEmpty: {
						message: 'Journal is required'
					}
				}
            },
			issue_number: {
                validators: {
					notEmpty: {
						message: 'Issue Number is required'
					},
					regexp: {
					regexp:  /^[0-9]*$/,
					message:'Issue Number must be digits'
					}
				}
            },
			category: {
                validators: {
					notEmpty: {
						message: 'Category is required'
					}
				}
            },
			year_of_article: {
                validators: {
					notEmpty: {
						message: 'Year of article is required'
					}
				}
            },
			
			image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif file are allowed'
					}
				}
            }
            }
        })
     
});

</script>

