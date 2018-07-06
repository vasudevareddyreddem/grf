<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Testimonial 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit Testimonial</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Testimonial</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" method="post" class="" action="<?php echo base_url('testimonial/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
							<input  type="hidden" name="t_id" id="t_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>">
      
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Name</label>
								<div class="">
									<input type="text" class="form-control" name="name" id="name" value="<?php echo isset($details['name'])?$details['name']:''; ?>" placeholder="Enter Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Professional</label>
								<div class="">
									<input type="text" class="form-control" name="professional" id="professional" value="<?php echo isset($details['professional'])?$details['professional']:''; ?>" placeholder="Enter Professional" />
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
								<textarea rows="2" name="description" class="form-control" id="description" ><?php echo isset($details['description'])?$details['description']:''; ?></textarea>
								</div>
							</div>
                        </div>
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('testimonial/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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
        $('#description').summernote({
            height: ($(window).height() - 300),
            callbacks: {
                onImageUpload: function(image) {
                    description(image[0]);
                }
            }
        });
    });
	
	function description(image) {
            var data = new FormData();
            data.append("image", image);
            $.ajax({
                url: '<?php echo base_url('home/sameimage'); ?>',
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "post",
                success: function(url) {
                    var image = $('<img>').attr('src',url);
                    $('#description').summernote("insertNode", image[0]);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
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

