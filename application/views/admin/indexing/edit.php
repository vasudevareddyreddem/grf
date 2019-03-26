<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Index image 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('indexing/lists'); ?>">Index List</a></li>
        <li class="active">Edit Index image </li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Index image  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addindex" method="post"    class="" action="<?php echo base_url('indexing/editpost'); ?>" enctype="multipart/form-data">
							<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
					<input type="hidden" class="form-control" name="i_id" id="i_id" value="<?php echo isset($details['i_id'])?$details['i_id']:''; ?>" />

						
      
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Image Link</label>
								<div class="">
									<input type="text" class="form-control" name="link" id="link" value="<?php echo isset($details['img_url'])?$details['img_url']:''; ?>" placeholder="Enter Image Url" />
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
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('indexing/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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

