<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GRF Publishers Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/bootstrap/css/bootstrap.min.css">
   <link href="<?php echo base_url(); ?>assets/vendor/admin/dist/css/bootstrapValidator.min.css" rel="stylesheet">
   
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/datatables/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/datepicker/datepicker3.css">
  <!-- Theme style -->
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/dist/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/dist/css/custom.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/summernote/summernote.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/vendor/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/vendor/admin/bootstrap/js/bootstrap.min.js"></script>


<script src="<?php echo base_url(); ?>assets/vendor/admin/dist/js/bootstrapValidator.min.js"></script>
</head>
<style>
.sidebar{
	overflow-y: scroll !important;
}
</style>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboard'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="height:50px;width:auto" class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="LOGO"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <?php //echo '<pre>';print_r($userdetails);exit; ?>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php if($userdetails['profile_pic']!=''){ ?>
                <img src="<?php echo base_url('assets/adminpic/'.$userdetails['profile_pic']); ?>" class="img-circle" alt="<?php echo isset($userdetails['name'])?$userdetails['name']:''; ?>" style="height:20px;width:30px;">
			<?php }else{  ?>
				<img src="<?php echo base_url('assets/vendor/admin/img.png'); ?>" class="img-circle" alt="User Image" style="height:20px;width:auto;">

			<?php } ?>
              <span class="hidden-xs"><?php echo isset($userdetails['name'])?$userdetails['name']:''; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
				<?php if($userdetails['profile_pic']!=''){ ?>
					<img src="<?php echo base_url('assets/adminpic/'.$userdetails['profile_pic']); ?>" class="img-circle" alt="User Image">
				<?php }else{  ?>
						<img src="<?php echo base_url('assets/vendor/admin/img.png'); ?>" class="img-circle" alt="User Image">
				<?php } ?>
                <p>
                 <?php echo isset($userdetails['name'])?$userdetails['name']:''; ?>
                  <small><?php echo isset($userdetails['role'])?$userdetails['role']:''; ?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('dashboard/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar" style="overflow-y: scroll;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel bg-profile">
        <div class="pull-left image">
          <img src="http://lh4.googleusercontent.com/-kMEBuGZ4uhQ/AAAAAAAAAAI/AAAAAAAAAeQ/LE1e8U_EVN8/s28-c-k-no/photo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>form</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li> 
		<li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
              <a href="inbox.php">Inbox
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
              </a>
            </li>
            <li><a href="compose.php">Compose</a></li>
            <li class=""><a href="read-mail.php">Read</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="formsingle.php">
            <i class="fa fa-user"></i> <span>formsingle</span>
            <span class="pull-right-container">
             
            </span>
          </a>
         
        </li>
		<li class="treeview">
          <a href="editer.php">
            <i class="fa fa-user"></i> <span>Editer</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="parents.php">
            <i class="fa fa-user"></i> <span>Parents</span>
            <span class="pull-right-container">
             
            </span>
          </a>
         
        </li>
		<li class="treeview">
          <a href="classes.php">
            <i class="fa fa-user"></i> <span>Classes</span>
            <span class="pull-right-container">
             
            </span>
          </a>
         
        </li>
		<li class="treeview">
          <a href="attendance.php">
            <i class="fa fa-user"></i> <span>Attendance</span>
            <span class="pull-right-container">
             
            </span>
          </a>
         
        </li>
		<li class="treeview">
          <a href="subjects.php">
            <i class="fa fa-user"></i> <span>Subjects</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="marks.php">
            <i class="fa fa-user"></i> <span>Marks</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="exam.php">
            <i class="fa fa-user"></i> <span>Exams</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="time-table.php">
            <i class="fa fa-user"></i> <span>Time Table</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="transport.php">
            <i class="fa fa-user"></i> <span>Transport</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <!--view modals-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
			
			<div style="padding:10px">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 style="pull-left" class="modal-title">Confirmation</h4>
			</div>
			<div class="modal-body">
			<div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
			  <div class="row">
				<div id="content1" class="col-xs-12 col-xl-12 form-group">
				Are you sure ? 
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 col-sm-6  col-sm-6 ">
				  <button type="button" aria-label="Close" data-dismiss="modal" class="btn  blueBtn pull-left">Cancel</button>
				</div>
				<div class="col-md-6 col-sm-6  col-sm-6 ">
                <a href="?id=value" class="btn  blueBtn popid pull-right" style="text-decoration:none;"> <span aria-hidden="true">Ok</span></a>
				</div>
			 </div>
		  </div>
      </div>
      
    </div>
  </div>
<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<script>
function adminstatus(id){
	if(id==1){
			$('#content1').html('Are you sure you want to Deactivate?');
		
	}if(id==0){
			$('#content1').html('Are you sure you want to activate?');
	}
}
function admindedeletemsg(id){
	$('#content1').html('Are you sure you want to delete?');
	
}
function get_gournals(id){
	
		if(id!=''){
			jQuery.ajax({
   					url: "<?php echo base_url('admin/get_journals_list');?>",
   					data: {
   						cat_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						//console.log(data);return false;
   						$('#journal').empty();
   						$('#journal').append("<option value=''>select</option>");
   						for(i=0; i<data.list.length; i++) {
   							$('#journal').append("<option value="+data.list[i].j_id+">"+data.list[i].title+"</option>");                      
                         
   						}
   						//console.log(data);return false;
   					}
   				
   				});
				
			}
}
</script>