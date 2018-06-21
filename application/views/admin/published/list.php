<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Published Gallery Images List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Published Gallery Images List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Published Gallery Images List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>ALt Tags</th>
                  <th>Created date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($gallery_list) && count($gallery_list)>0){ ?>
				<?php foreach($gallery_list as $list){ ?>
                <tr>
                  <td><img width="50px" height="50px" src="<?php echo base_url('assets/published_gallery/'.$list['image']); ?>">
					<td><?php echo htmlentities($list['alt_tags']); ?></td>
				  <td><?php echo date("d-m-Y", strtotime($list['create_at']));?></td>
				<td><?php if($list['status']==1){ echo "Active"; }else{ echo "deactive";} ?></td>
                  <td>
					<a href="<?php echo base_url('published-gallery/edit/'.base64_encode($list['id'])); ?>"><i class="fa fa-edit"></i></a>
										&nbsp;&nbsp;

					<a href="<?php echo base_url('published-gallery/status/'.base64_encode($list['id']).'/'.base64_encode($list['status'])); ?>"><i class="fa fa-check-square-o"></i></a>
										&nbsp;&nbsp;

					<a href="<?php echo base_url('published-gallery/delete/'.base64_encode($list['id'])); ?>"><i class="fa fa-trash-o"></i></a>
				  
				  </td>
                </tr>
                
                
                
				<?php } ?>
				<?php } ?>
				</tbody>
				<tfoot>
                <tr>
                  <th>Image</th>
                  <th>ALt Tags</th>
                  <th>Created date</th>
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
