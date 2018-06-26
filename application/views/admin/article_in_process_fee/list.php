
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Article in Process Fee List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Article in Process Fee List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Article in Process Fee List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="display:none">id </th>
                  <th>Created Date</th>
                  <th>Category Name</th>
                  <th>Journal</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($article_in_process_fee_list) && count($article_in_process_fee_list)>0){ ?>
				<?php foreach($article_in_process_fee_list as $list){ ?>
                <tr>
                  <td style="display:none"><?php echo htmlentities($list['id']); ?></td>
                  <td><?php echo Date('Y-M-d',strtotime(htmlentities($list['create_at'])));?></td>
                  <td><?php echo htmlentities($list['category']); ?></td>
                  <td><?php echo htmlentities($list['journaltitle']); ?></td>
                  <td><?php if($list['status']==1){ echo "Active"; }else{ echo "deactive";} ?></td>
                  <td>
					<a href="<?php echo base_url('Article-in-process-fee/edit/'.base64_encode($list['id'])); ?>"><i class="fa fa-edit"></i></a>
										&nbsp;&nbsp;

					<a href="javascript;void(0);" onclick="admindeactive('<?php echo base64_encode(htmlentities($list['id'])).'/'.base64_encode(htmlentities($list['status']));?>');adminstatus('<?php echo $list['status'];?>')" href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-check-square-o"></i></a>
										&nbsp;&nbsp;

					<a href="javascript;void(0);" onclick="admindedelete('<?php echo base64_encode($list['id']) ?>');admindedeletemsg();" data-toggle="modal" data-target="#myModal" title="Delete"><i class="fa fa-trash-o"></i></a>
				  
				  </td>
                </tr>
                
                
                
				<?php } ?>
				<?php } ?>
				</tbody>
				<tfoot>
                <tr>
                  <th style="display:none">id </th>
                  <th>Created Date</th>
                  <th>Category Name</th>
                  <th>Journal</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 

<script>
function admindeactive(id){
	$(".popid").attr("href","<?php echo base_url('Article-in-process-fee/status'); ?>"+"/"+id);
}

function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('Article-in-process-fee/delete'); ?>"+"/"+id);
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
</script>
