<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Journal category List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Journal category List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Journal category List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Category Name</th>
                  <th>SEO Title</th>
                  <th>SEO URL</th>
                  <th>SEO Keywords</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($category_list) && count($category_list)>0){ ?>
				<?php foreach($category_list as $list){ ?>
                <tr>
                  <td><?php echo htmlentities($list['category']); ?></td>
                  <td><?php echo htmlentities($list['seo_title']); ?></td>
                  <td><?php echo htmlentities($list['seo_url']); ?></td>
                  <td><?php echo htmlentities($list['seo_keyword']); ?></td>
                  <td><?php if($list['status']==1){ echo "Active"; }else{ echo "deactive";} ?></td>
                  <td>
					<a href="<?php echo base_url('journal/edit/'.base64_encode($list['c_id'])); ?>"><i class="fa fa-edit"></i></a>
										&nbsp;&nbsp;

					<a href="<?php echo base_url('journal/status/'.base64_encode($list['c_id']).'/'.base64_encode($list['status'])); ?>"><i class="fa fa-check-square-o"></i></a>
										&nbsp;&nbsp;

					<a href="<?php echo base_url('journal/delete/'.base64_encode($list['c_id'])); ?>"><i class="fa fa-trash-o"></i></a>
				  
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
