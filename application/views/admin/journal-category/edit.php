<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Journal category 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> Edit Journal category</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Journal category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" method="post" class="" action="<?php echo base_url('journal/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
<input type="hidden" class="form-control" name="c_id" id="c_id" value="<?php echo isset($details['c_id'])?$details['c_id']:''; ?>">
      
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Category</label>
								<div class="">
									<input type="text" class="form-control" name="category" id="category" value="<?php echo isset($details['category'])?$details['category']:''; ?>" placeholder="Enter Category" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">SEO Title</label>
								<div class="">
									<input type="text" class="form-control" name="seo_title" value="<?php echo isset($details['seo_title'])?$details['seo_title']:''; ?>" id="seo_title" placeholder="Enter SEO Title" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">SEO URL</label>
								<div class="">
									<input type="text" class="form-control" name="seo_url" value="<?php echo isset($details['seo_url'])?$details['seo_url']:''; ?>" id="seo_url" placeholder="Enter SEO URL" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">SEO Keywords</label>
								<div class="">
									<input type="text" class="form-control" name="seo_keyword" value="<?php echo isset($details['seo_keyword'])?$details['seo_keyword']:''; ?>" id="seo_keyword" placeholder="Enter SEO Keywords" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Description</label>
								<div class="">
									<textarea  class="form-control" name="description"  id="description" placeholder="Enter Description" ><?php echo isset($details['description'])?$details['description']:''; ?></textarea>
								</div>
							</div>
                        </div>
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('journal/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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
$(document).ready(function() {
    $('#addflyer').bootstrapValidator({
        
        fields: {
             category: {
                validators: {
					notEmpty: {
						message: 'Category is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Category wont allow <> [] = % '
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
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'SEO Keywords wont allow <> [] = % '
					}
				}
            },description: {
                validators: {
					notEmpty: {
						message: 'Description is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Description wont allow <> [] = % '
					}
				}
            }
            }
        })
     
});

</script>

