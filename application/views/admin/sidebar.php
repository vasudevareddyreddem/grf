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
      <?php //echo '<pre>';print_r($u_url);exit; ?>
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
		<li class="<?php if(isset($u_url) && $u_url==base_url('journal')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-list-ol"></i> <span>Journal Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('journal/'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('journal/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('journal-details')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-list-ol"></i> <span>Journals</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('journal-details/'); ?>"><i class="fa fa-circle-o"></i>Add Details</a></li>
			<li class=""><a href="<?php echo base_url('journal-details/lists'); ?>"><i class="fa fa-circle-o"></i> Details List</a></li>
			<li class=""><a href="<?php echo base_url('journal-details/add-banners'); ?>"><i class="fa fa-circle-o"></i> Add Banners</a></li>
			<li class=""><a href="<?php echo base_url('journal-details/banners-list'); ?>"><i class="fa fa-circle-o"></i> Banners List</a></li>
			<li class=""><a href="<?php echo base_url('journal-details/add-edotirs'); ?>"><i class="fa fa-circle-o"></i>Add Editors</a></li>
			<li class=""><a href="<?php echo base_url('journal-details/edotirs-list'); ?>"><i class="fa fa-circle-o"></i> Editors List</a></li>
			<li class=""><a href="<?php echo base_url('article-in-press'); ?>"><i class="fa fa-circle-o"></i> Article in press</a></li>
			<li class=""><a href="<?php echo base_url('article-in-press/lists'); ?>"><i class="fa fa-circle-o"></i> Article in press List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('testimonial')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Testimonial</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('testimonial'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('testimonial/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('latestupdates')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Latest updates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('latestupdates'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('latestupdates/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('faq')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Faq's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('faq'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('faq/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('Guidelines')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Guide lines</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('guidelines'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('guidelines/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
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
        <li><a href="<?php echo base_url('testimonial'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Testimonial</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>