<div class="content-wrapper">
<section class="content-header">
      <h1>
        Add Index Image 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add Index Image </li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Index Image  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addindex" method="post" class="" action="<?php echo base_url('indexing/addpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

      
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Image Link</label>
								<div class="">
									<input type="text" class="form-control" name="link" id="link" value="" placeholder="Enter Image Url" />
								</div>
							</div>
                        </div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Image</label>
								<div class="">
									<input type="file" class="form-control" name="image" id="image" value="" />
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
$(document).ready(function() {
    $('#addindex').bootstrapValidator({
        
        fields: {
             image: {
                validators: {
					notEmpty: {
						message: 'image is required'
					},
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            }
            }
        })
     
});

</script>

