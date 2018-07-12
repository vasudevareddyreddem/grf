<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Journal Details 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> Edit Journal Details</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Journal Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" method="post" class="" action="<?php echo base_url('journal_details/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
					<input type="hidden" name="j_id" name="j_id" value="<?php echo isset($details['j_id'])?$details['j_id']:''; ?>">	
      
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Category</label>
								<div class="">
									 <select class="form-control" id="category" name="category">
									  <option value="">Select</option>
									 <?php foreach($journals_list as $list){ ?>
									 <?php if($details['category']==$list['c_id']){ ?>
									<option value="<?php echo $list['c_id']; ?>" selected><?php echo $list['category']; ?></option>
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
								<label class=" control-label">Select Journal banner</label>
								<div class="">
									<input type="file" class="form-control" name="journal_banner" id="journal_banner" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Title</label>
								<div class="">
									<input type="text" class="form-control" name="title" id="title" value="<?php echo isset($details['title'])?$details['title']:''; ?>" placeholder="Enter Title" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Subject</label>
								<div class="">
									<input type="text" class="form-control" name="subject" value="<?php echo isset($details['subject'])?$details['subject']:''; ?>" id="subject" placeholder="Enter Subject" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Alt Tags</label>
								<div class="">
									<input type="text" class="form-control" name="alt_tags" value="<?php echo isset($details['alt_tags'])?$details['alt_tags']:''; ?>" id="alt_tags" placeholder="Enter Alt Tags" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO Title</label>
								<div class="">
									<input type="text" class="form-control" name="seo_title" value="<?php echo isset($details['seo_title'])?$details['seo_title']:''; ?>" id="seo_title" placeholder="Enter SEO Title" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO URL</label>
								<div class="">
									<input type="text" class="form-control" name="seo_url" value="<?php echo isset($details['seo_url'])?$details['seo_url']:''; ?>" id="seo_url" placeholder="Enter SEO URL" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO Keywords</label>
								<div class="">
									<input type="text" class="form-control" name="seo_keyword" value="<?php echo isset($details['seo_keywords'])?$details['seo_keywords']:''; ?>" id="seo_keyword" placeholder="Enter SEO Keywords" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO Description</label>
								<div class="">
									<textarea  class="form-control" name="seo_description" value="" id="seo_description" placeholder="Enter Description" ><?php echo isset($details['seo_description'])?$details['seo_description']:''; ?></textarea>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Key words</label>
								<div class="">
									<textarea id="key_words1"  name="key_words" rows="2" cols="80" >
                                            <?php echo isset($details['key_words'])?$details['key_words']:''; ?>
								</textarea>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Description</label>
								<div class="">
									<textarea  id="description1"  name="description" rows="2" cols="80" >
                                          <?php echo isset($details['description'])?$details['description']:''; ?>  
								</textarea>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Prices</label>
								<div class="">
									<textarea name="prices" id="prices1" >
									<?php echo isset($details['prices'])?$details['prices']:''; ?>
									</textarea>
								</div>
							</div>
                        </div>
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('journal-details/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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
<script>
      $(function () {
    CKEDITOR.replace('key_words');
    $(".textarea").wysihtml5();
  });$(function () {
    CKEDITOR.replace('description');
    $(".textarea").wysihtml5();
  });
  $(function () {
    CKEDITOR.replace('prices');
    $(".textarea").wysihtml5();
  });
  </script>

  <script type="text/javascript">
$(document).ready(function() {
    $('#addflyer').bootstrapValidator({
        
        fields: {
             category: {
                validators: {
					notEmpty: {
						message: 'Category is required'
					}
				}
            },
			journal_banner: {
                validators: {
					
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
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
			subject: {
                validators: {
					notEmpty: {
						message: 'Subject is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Subject wont allow <> [] = % '
					}
				}
            },alt_tags: {
                validators: {
					notEmpty: {
						message: 'Alt tags is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Alt tags wont allow <> [] = % '
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
            },key_words: {
                validators: {
					notEmpty: {
						message: 'Keywords is required'
					}
				}
            },description: {
                validators: {
					notEmpty: {
						message: 'Description is required'
					}
				}
            },prices: {
                validators: {
					notEmpty: {
						message: 'Price is required'
					}
				}
            }
            }
        })
     
});

</script>

