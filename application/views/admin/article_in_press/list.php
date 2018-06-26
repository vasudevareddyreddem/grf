
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Article in press List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Article in press List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Article in press List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                <?php if(isset($article_in_press_list) && count($article_in_press_list)>0){ ?>
				<?php foreach($article_in_press_list as $list){ ?>
                <tr>
                  <td style="display:none"><?php echo htmlentities($list['a_id']); ?></td>
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
                
                
                
				<?php } ?>
				<?php } ?>
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
	$(".popid").attr("href","<?php echo base_url('article-in-press/status'); ?>"+"/"+id);
}

function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('article-in-press/delete'); ?>"+"/"+id);
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
