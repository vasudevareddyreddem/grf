<div class="content-wrapper">
<section class="content-header">
      <h1>
        Article in press view 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('article-in-press/lists'); ?>">Article in press list</a></li>
        <li class="active">Article in press view</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Article in press view</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" method="post" class="" action="<?php echo base_url('article-in-press/view'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
					
      
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Category</label>
								<div class="">
									 <select class="form-control" id="category" onchange="get_gournals(this.value);" name="category">
									  <option value="">Select</option>
									 <?php foreach($journals_category_list as $list){ ?>
									<option value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>
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
									 
									 			<option value="<?php echo $list['j_id']; ?>"><?php echo $list['title']; ?></option>

									<?php } ?>
									</select>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Years of article </label>
								<div class="">
									 <select class="form-control" id="year_of_article"  name="year_of_article">
									  <option value="">Select</option>
									  <?php
								  $currently_selected = date('Y'); 
								  $earliest_year = 1950; 
								  $latest_year = date('Y');  ?>

									<?php foreach ( range( $latest_year, $earliest_year ) as $i ) { ?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
									</select>
									
								
																	
								</div>
							</div>
                        </div>
						<div class="col-md-6" id="archieve_show" style="display:none;">
							<div class="form-group">
								<label class=" control-label">Archieve List</label>
								<div class="">
								<span id="archieve_list">
								</span>
								</div>
							</div>
                        </div>
						
						
						
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="submit">submit</button>
								<a href="<?php echo base_url('article-in-press/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
                            </div>
                        </div>
						
						
                    </form>
					<div class="clearfix">&nbsp;</div>
					
					<!---tables purpose----------->
				<?php if(isset($details) && count($details)>0){ ?>	
				<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="display:none">id </th>
                  <th>Created Date</th>
                  <th>Ap Title</th>
                  <th>Ap Author</th>
                  <th>Year</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
				<?php $count=1;foreach($details as $list){ ?>
                <tr>
                  <td style="display:none"><?php echo htmlentities($list['a_id']); ?></td>
                  <td><?php echo $count;?></td>
                  <td><?php echo Date('Y-M-d',strtotime(htmlentities($list['create_at'])));?></td>
                  <td><?php echo htmlentities($list['title']); ?></td>
                  <td><?php echo htmlentities($list['author_name']); ?></td>
                  <td><?php echo htmlentities($list['year_of_article']); ?></td>
                  <td><?php if($list['status']==1){ echo "Active"; }else{ echo "deactive";} ?></td>
                  <td>
					<a href="<?php echo base_url('article-in-press/edit/'.base64_encode($list['a_id'])); ?>"><i class="fa fa-edit"></i></a>
										&nbsp;&nbsp;

					<a href="javascript;void(0);" onclick="admindeactive('<?php echo base64_encode(htmlentities($list['a_id'])).'/'.base64_encode(htmlentities($list['status']));?>');adminstatus('<?php echo $list['status'];?>')" href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-check-square-o"></i></a>
										&nbsp;&nbsp;

					<a href="javascript;void(0);" onclick="admindedelete('<?php echo base64_encode($list['a_id']) ?>');admindedeletemsg();" data-toggle="modal" data-target="#myModal" title="Delete"><i class="fa fa-trash-o"></i></a>
				  
				  </td>
                </tr>
                
                
                
				<?php $count++;} ?>
				
				</tbody>
				<tfoot>
                <tr>
                  <th style="display:none">id </th>
                  <th>Created Date</th>
                  <th>Ap Title</th>
                  <th>Ap Author</th>
                  <th>Year</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
					
				<?php } ?>	
					<!---tables purpose----------->
					
					
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
  function admindeactive(id){
	$(".popid").attr("href","<?php echo base_url('article-in-press/viewstatus'); ?>"+"/"+id);
}

function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('article-in-press/viewstatus'); ?>"+"/"+id);
}
 $(function () {
    $("#example1").DataTable({
		 "order": [[0, "desc" ]]
	});
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
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
   							$('#archieve_list').append("<input type='checkbox' name='article_ids[]' value="+data.list[i].a_id+">"+data.list[i].title+"<br>");                      
                         
   						}
   						//console.log(data);return false;
   					}
   				
   				});
				
			}
	  
  }

</script>

