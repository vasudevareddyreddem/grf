<div class="content-wrapper">
<section class="content-header">
      <h1>
        Add Testimonial 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add Testimonial</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Testimonial</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" method="post" class="" action="<?php echo base_url('testimonial/addpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

      
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Name</label>
								<div class="">
									<input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Professional</label>
								<div class="">
									<textarea  class="form-control" name="professional" id="professional" value="" placeholder="Enter Professional" ></textarea>
								</div>
							</div>
                        </div>
						
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Testimonial Image</label>
								<div class="">
									<input type="file" class="form-control" name="image" id="image" value="" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Testimonial Description</label>
								<div class="">
								<textarea rows="2" name="description" class="form-control" id="description" ></textarea>
								</div>
							</div>
                        </div>
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add</button>
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
   $(function () {
    CKEDITOR.replace('description');
    $(".textarea").wysihtml5();
  }); 
  $(function () {
    CKEDITOR.replace('professional');
    $(".textarea").wysihtml5();
  });
$(document).ready(function() {
    $('#addflyer').bootstrapValidator({
        
        fields: {
             name: {
                validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Name wont allow <> [] = % '
					}
				}
            }, professional: {
                validators: {
					notEmpty: {
						message: 'Professional is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Professional wont allow <> [] = % '
					}
				}
            },image: {
                validators: {
					
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
           
            description: {
					 validators: {
					notEmpty: {
						message: 'Description is required'
					}
				}
				}
            }
        })
     
});

</script>

