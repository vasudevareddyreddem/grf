<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if($userdetails['profile_pic']!=''){ ?>
					<img src="<?php echo base_url('assets/adminpic/'.$userdetails['profile_pic']); ?>" class="img-circle" alt="User Image">
				<?php }else{  ?>
						<img src="<?php echo base_url('assets/vendor/admin/img.png'); ?>" class="img-circle" alt="User Image">
				<?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo isset($userdetails['name'])?$userdetails['name']:''; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		 <li class=" treeview">
          <a href="<?php echo base_url('dashboard'); ?>">
            <i class="fa fa-th"></i> <span>Dashboard</span>
           </a>
        </li>
        <li class="<?php if(isset($u_url) && $u_url==base_url('flyers')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Flyers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('flyers'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('flyers/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('conference-flyers')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>conference-flyers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('conference-flyers'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('conference-flyers/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('conference-images')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>conference-images</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('conference-images'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('conference-images/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="form.php"><i class="fa fa-circle-o"></i> single form</a></li>
            <li><a href="twosideform.php"><i class="fa fa-circle-o"></i> two side form</a></li>
          </ul>
        </li>
        
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>