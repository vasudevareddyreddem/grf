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
        <li class="<?php if(isset($u_url) && $u_url==base_url('banners')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('banners'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('banners/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
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
				<li class=""><a href="<?php echo base_url('article-in-press/view'); ?>"><i class="fa fa-circle-o"></i> Article in press view</a></li>
				<li class=""><a href="<?php echo base_url('article-in-press/lists'); ?>"><i class="fa fa-circle-o"></i> Article in press List</a></li>
				<li class="<?php if(isset($u_url) && $u_url==base_url('Media-partner')){ echo "active"; } ?> treeview">
					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Article In process Fee</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li class="active"><a href="<?php echo base_url('Article-in-process-fee'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
						<li><a href="<?php echo base_url('Article-in-process-fee/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
					  </ul>
				</li>
				<li class="<?php if(isset($u_url) && $u_url==base_url('conference-process')){ echo "active"; } ?> treeview">
					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Conference-process</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li class="active"><a href="<?php echo base_url('conference-process'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
						<li><a href="<?php echo base_url('conference-process/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
					  </ul>
				</li>
				<li class="<?php if(isset($u_url) && $u_url==base_url('article-procedures')){ echo "active"; } ?> treeview">
					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Article Procedures</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li class="active"><a href="<?php echo base_url('article-procedures'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
						<li><a href="<?php echo base_url('article-procedures/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
					  </ul>
				</li>
				<li class="<?php if(isset($u_url) && $u_url==base_url('issues')){ echo "active"; } ?> treeview">
					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Issues</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li class="active"><a href="<?php echo base_url('issues'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
						<li><a href="<?php echo base_url('issues/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
					  </ul>
				</li>
          </ul>
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
		<li class="<?php if(isset($u_url) && $u_url==base_url('Media-partner')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Media Partner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('Media-partner'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('Media-partner/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('News-article')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>News & Article</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('News-article'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('News-article/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('published-gallery')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Published Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('published-gallery'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('published-gallery/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
		<li class="<?php if(isset($u_url) && $u_url==base_url('Reviewerboard')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Reviewer board</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('reviewerboard'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('reviewerboard/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
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
            <li><a href="<?php echo base_url('latestupdates/scroll'); ?>"><i class="fa fa-circle-o"></i> Scroll Content</a></li>
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
		<li class="<?php if(isset($u_url) && $u_url==base_url('special-issue')){ echo "active"; } ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Special Issue</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('special-issue'); ?>"><i class="fa fa-circle-o"></i> Add</a></li>
            <li><a href="<?php echo base_url('special-issue/lists'); ?>"><i class="fa fa-circle-o"></i> List</a></li>
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
		<li class="<?php if(isset($u_url) && $u_url==base_url('unsubscribes')){ echo "active"; } ?> treeview">
          <a href="<?php echo base_url('unsubscribes'); ?>">
            <i class="fa fa-dashboard"></i> <span>Unsubscribes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>