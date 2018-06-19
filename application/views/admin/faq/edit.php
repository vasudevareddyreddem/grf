<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Faq's
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Edit Faq's</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Faq's</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addfaq" method="post" class="" action="<?php echo base_url('faq/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" class="form-control" name="f_id" id="f_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>" />

      
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Question</label>
								<div class="">
									<input type="text" class="form-control" name="question" id="question" value="<?php echo isset($details['question'])?$details['question']:''; ?>" placeholder="Enter Question" />
								</div>
							</div>
                        </div>
						<div class="col-md-8">
							<div class="form-group">
								<label class=" control-label">Description</label>
								<div class="">
								<textarea rows="2" name="description" class="form-control" id="description" ><?php echo isset($details['description'])?$details['description']:''; ?></textarea>
								</div>
							</div>
                        </div>
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">update</button>
								<a href="<?php echo base_url('faq/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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
    $('#addfaq').bootstrapValidator({
        
        fields: {
             question: {
                validators: {
					notEmpty: {
						message: 'Question is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Question wont allow <> [] = % '
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

