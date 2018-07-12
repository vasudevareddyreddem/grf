<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Article in Process Fee
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> Edit Article in Process Fee</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Article in Process Fee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" onsubmit="return checkvalidation();" method="post" class="" action="<?php echo base_url('Article-in-process-fee/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
										<input type="hidden" id="a_id" name="a_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>">
					
      
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
								<label class=" control-label">Tables</label>
								<div class="">
									<textarea id="table" name="table" rows="2" cols="80" >
                                        <?php echo isset($details['table'])?$details['table']:''; ?>    
								</textarea>
								</div>
							</div>
                        </div>
						
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('Article-in-process-fee/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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
    $(function () {
    CKEDITOR.replace('table');
    $(".textarea").wysihtml5();
  }); 
  function checkvalidation(){
	  var id=$('#journal').val();
	  if(id==''){
		  alert('Please select at least one Journal');
		 return false; 
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
			author_name: {
                validators: {
					notEmpty: {
						message: 'Author Name is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Author Name wont allow <> [] = % '
					}
				}
            },article_type: {
                validators: {
					notEmpty: {
						message: 'Article Type is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Article Type wont allow <> [] = % '
					}
				}
            },
			pdf_file: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(pdf)$",
					message: 'Uploaded file is not a valid. Only pdf file are allowed'
					}
				}
            },
			image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(doc|docx|html)$",
					message: 'Uploaded file is not a valid. Only doc,docx,html file are allowed'
					}
				}
            },
			video: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(mp3|mp4|mpeg|mpg|mov)$",
					message: 'Uploaded file is not a valid. Only mp3,mp4,mpeg,mpg,mov file are allowed'
					}
				}
            },
           
			title: {
                validators: {
					notEmpty: {
						message: 'Title is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Title wont allow <> [] = % '
					}
				}
            },
			url: {
                validators: {
					notEmpty: {
						message: 'Url is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Url wont allow <> [] = % '
					}
				}
            },seo_title: {
                validators: {
					notEmpty: {
						message: 'SEO Title is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'SEO Title wont allow <> [] = % '
					}
				}
            },
			seo_url: {
                validators: {
					notEmpty: {
						message: 'SEO Url is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'SEO Url wont allow <> [] = % '
					}
				}
            },seo_keyword: {
                validators: {
					notEmpty: {
						message: 'SEO Keywords is required'
					}
				}
            },seo_description: {
                validators: {
					notEmpty: {
						message: 'SEO Description is required'
					}
				}
            },research_article: {
                validators: {
					notEmpty: {
						message: 'Research Article is required'
					}
				}
            },
			abstract: {
                validators: {
					notEmpty: {
						message: 'Abstract is required'
					}
				}
            },introduction: {
                validators: {
					notEmpty: {
						message: 'Introduction is required'
					}
				}
            },references: {
                validators: {
					notEmpty: {
						message: 'References is required'
					}
				}
            },figures: {
                validators: {
					notEmpty: {
						message: 'figures is required'
					}
				}
            },suggested_citation: {
                validators: {
					notEmpty: {
						message: 'Suggested citation is required'
					}
				}
            },tables: {
                validators: {
					notEmpty: {
						message: 'Tables is required'
					}
				}
            }
            }
        })
     
});

</script>

