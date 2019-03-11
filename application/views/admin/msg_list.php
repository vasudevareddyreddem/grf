<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Message List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Message List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Message List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($msg_list) && count($msg_list)>0){ ?>
				<?php foreach($msg_list as $list){ ?>
                <tr>
                  <td><?php echo htmlentities($list['uname']); ?></td>
                  <td><?php echo htmlentities($list['uemail']); ?></td>
                  <td><?php echo htmlentities($list['msg']); ?></td>
                  <td><?php echo htmlentities($list['date']); ?></td>
                  
                </tr>
                
                
                
				<?php } ?>
				<?php } ?>
				</tbody>
				<tfoot>
                <tr>
                  <th>Country name</th>
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


function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('country/delete'); ?>"+"/"+id);
}
  $(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
