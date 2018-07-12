<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Guide Line 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> Edit Guide Line</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Guide Line</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" method="post" class="" action="<?php echo base_url('guidelines/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
										<input type="hidden" class="form-control" name="g_id" id="g_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>" />

					<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Page  Name</label>
								<div class="">
									<input type="text" class="form-control" name="pagename" id="pagename" value="<?php echo isset($details['pagename'])?$details['pagename']:''; ?>" placeholder="Enter Page name" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Title</label>
								<div class="">
									<input type="text" class="form-control" name="title" id="title" value="<?php echo isset($details['title'])?$details['title']:''; ?>" placeholder="Enter Title" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Description</label>
								<div class="">
									<textarea id="description" name="description" rows="2" cols="80" ><?php echo isset($details['description'])?$details['description']:''; ?>
                                            
								</textarea>
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
									<input type="text" class="form-control" name="seo_keyword" value="<?php echo isset($details['seo_keyword'])?$details['seo_keyword']:''; ?>" id="seo_keyword" placeholder="Enter SEO Keywords" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO Description</label>
								<div class="">
									<textarea  class="form-control" name="seo_description"  id="seo_description" placeholder="Enter Description" ><?php echo isset($details['seo_description'])?$details['seo_description']:''; ?></textarea>
								</div>
							</div>
                        </div>
						
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('guidelines/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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
    CKEDITOR.replace('description');
    $(".textarea").wysihtml5();
  });
$(document).ready(function() {
    $('#addflyer').bootstrapValidator({
        
        fields: {
            
			pagename: {
                validators: {
					notEmpty: {
						message: 'Page Name is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Page Name wont allow <> [] = % '
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
			description: {
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
            }
            }
        })
     
});

</script>

