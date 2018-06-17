<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Conference Images List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Conference Images List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Conference Images List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Title Color Code</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($fly_list) && count($fly_list)>0){ ?>
				<?php foreach($fly_list as $list){ ?>
                <tr>
                  <td><?php echo htmlentities($list['title']); ?></td>
                  <td><img width="50px" height="50px" src="<?php echo base_url('assets/conference_img/'.$list['fly_image']); ?>">
				  </td>
                  <td><?php echo htmlentities($list['title_color']); ?></td>
                  <td><?php if($list['status']==1){ echo "Active"; }else{ echo "deactive";} ?></td>
                  <td>
					<a href="<?php echo base_url('conference-images/edit/'.base64_encode($list['f_id'])); ?>"><i class="fa fa-edit"></i></a>
					&nbsp;&nbsp;
					<a href="<?php echo base_url('conference-images/status/'.base64_encode($list['f_id']).'/'.base64_encode($list['status'])); ?>"><i class="fa fa-check-square-o"></i></a>
					&nbsp;&nbsp;
					<a href="<?php echo base_url('conference-images/delete/'.base64_encode($list['f_id'])); ?>"><i class="fa fa-trash-o"></i></a>
				  
				  </td>
                </tr>
                
                
                
				<?php } ?>
				<?php } ?>
				</tbody>
				<tfoot>
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Title Color Code</th>
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
  $(function () {
    $("#example1").DataTable();
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
