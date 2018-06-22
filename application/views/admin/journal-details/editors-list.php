
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Journals Editors List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Journals Editors List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Journals Editors List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="display:none">id </th>
                  <th>Journal </th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($editors_list) && count($editors_list)>0){ ?>
				<?php foreach($editors_list as $list){ ?>
                <tr>
                  <td style="display:none"><?php echo htmlentities($list['j_e_id']); ?></td>
                  <td><?php echo htmlentities($list['journaltitle']); ?></td>
                  <td><?php echo htmlentities($list['name']); ?></td>
                  <td><?php echo htmlentities($list['email']); ?></td>
                  <td><?php echo htmlentities($list['position']); ?></td>
                  <td><img width="50px" height="50px" src="<?php echo base_url('assets/editors_pics/'.$list['image']); ?>">
				  </td>
                  <td><?php if($list['status']==1){ echo "Active"; }else{ echo "deactive";} ?></td>
                  <td>
					<a href="<?php echo base_url('journal-details/editor-edit/'.base64_encode($list['j_e_id'])); ?>"><i class="fa fa-edit"></i></a>
										&nbsp;&nbsp;

					<a href="<?php echo base_url('journal-details/editorstatus/'.base64_encode($list['j_e_id']).'/'.base64_encode($list['status'])); ?>"><i class="fa fa-check-square-o"></i></a>
										&nbsp;&nbsp;

					<a href="<?php echo base_url('journal-details/editordelete/'.base64_encode($list['j_e_id'])); ?>"><i class="fa fa-trash-o"></i></a>
				  
				  </td>
                </tr>
                
                
                
				<?php } ?>
				<?php } ?>
				</tbody>
				<tfoot>
                <tr>
                  <th style="display:none">id </th>
                  <th>Journal </th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Image</th>
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
