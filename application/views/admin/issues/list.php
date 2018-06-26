
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Issues List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Issues List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Issues List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="display:none">id </th>
                  <th>Category</th>
                  <th>Journal</th>
                  <th>Issue No</th>
                  <th>Image</th>
                  <th>Articles</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($issues_list) && count($issues_list)>0){ ?>
				<?php foreach($issues_list as $list){ ?>
                <tr>
                  <td style="display:none"><?php echo htmlentities($list['id']); ?></td>
                  <td><?php echo htmlentities($list['category']); ?></td>
                  <td><?php echo htmlentities($list['journaltitle']); ?></td>
                  <td><?php echo htmlentities($list['number']); ?></td>
				  <td><img width="50px" height="50px" src="<?php echo base_url('assets/issues/'.$list['image']); ?>">
				  <td>
				  <?php if(count($list['articles_list'])>0){?>
				  <?php $cnt=1;foreach($list['articles_list'] as $lis){
					  echo '('.$cnt.') '.$lis['title'].'<br>';
					  $cnt++;} ?>
				  <?php }else{ ?>
					No Articles
				  <?php } ?>
				  
				  
				  
				  </td>
                  <td><?php if($list['status']==1){ echo "Active"; }else{ echo "deactive";} ?></td>
                  <td>
					<a href="<?php echo base_url('issues/edit/'.base64_encode($list['id'])); ?>"><i class="fa fa-edit"></i></a>
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
                  <th>Category</th>
                  <th>Journal</th>
                  <th>Issue No</th>
                  <th>Image</th>
                  <th>Articles</th>
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
	$(".popid").attr("href","<?php echo base_url('issues/status'); ?>"+"/"+id);
}

function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('issues/delete'); ?>"+"/"+id);
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
