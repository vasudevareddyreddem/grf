      
	   <?php if(isset($homapage_banners) && count($homapage_banners)>0){ ?>
	    <div class="ab_class">
        <div class="">
             <div class="">
               <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
			 <ol class="carousel-indicators">
					<?php $cnt=1;foreach($homapage_banners as $lists){ ?>
				   
					<?php if($cnt==1){ ?>
						<li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $cnt; ?>" class="active"></li>
						
					<?php }else{ ?>
						<li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $cnt; ?>"></li>
					<?php } ?>
				   
					<?php $cnt++;} ?>
			</ol>
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
				<?php $count=0;foreach($homapage_banners as $list){ ?>
				
				<?php //echo '<pre>';print_r($list);exit; ?>
				
				<?php if($count==0){ ?>
						<div class="item active">

							<!-- Slide Background -->
							<img src="<?php echo base_url('assets/home_banners/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<!--<div class="slide-text slide_style_center">
										<h1 data-animation="animated zoomInRight"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
									</div>-->
								</div>
							</div>
						</div>
				<?php }else{ ?>
						<div class="item">

							<!-- Slide Background -->
							<img src="<?php echo base_url('assets/home_banners/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<!--<div class="slide-text slide_style_center">
										<h1 data-animation="animated zoomInRight"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
									</div>-->
								</div>
							</div>
						</div>
				<?php } ?>
				<?php $count++;} ?>
                <!-- End of Slide -->



            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
             </div>
         </div>
		</div> 
		 <?php } ?>
       
       <div class="clear"></div>
        <!--revolution end-->
        <div class="search-filter">
            <div class="container">
       
                    <div class="row">
                       
                       <div class="col-md-10 col-xs-12">
                           <h3>Bibliotics Journals</h3>
                           <p>The journals, e-books and conferences are being published and organized in order to spread the
information on the latest technological and scientific researches among the core
group with the aim of disseminating information for the betterment of mankind.</p>
                       </div>  
                       <!--<div class="col-md-2 col-xs-12 text-center padding_0">
                           <a href="#" class="btn btn-red btn-lg btn-block ">MORE INFO</a>
                       </div>-->
                       
                    </div>
               
            </div>
        </div>
        <div class="divide60"></div>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
                    <h3>ABOUT US </h3>
                    <p> Bibliotics publishes international, peer-reviewed science, medicine, and engineering journals. It is an Open Access platform to support scientific innovation and advancement in the research community by increasing access to peer-reviewed quality research articles.

We host internationally-recognized, peer-reviewed journals to serve the scientific and medical community with validated and quality content across the broad range of disciplines, including medicine, clinical science, chemistry, and engineering. The Bibliotics Member Journals Editorial Board and Review Board ensures Bibliotics maintain the highest standards in scientific rigor. Additionally, all of the articles published with Bibliotics Central are permanently archived, providing unrestricted use and dissemination of the scientific information. All content is published under the Creative Commons Attribution License.</p>
                   
                </div>
				<br>
				<div class=" Welcome_txt fadeInUp wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
                    <h3>Our Vision</h3>
                    <p>Bibliotics encourages the advancement of high-quality research on the international stage by supporting the science and technology publishing and the unrestricted flow of scientific information through the Open Access platform.</p>
                   
                </div>
				<br>
				    
				<div class="panel panel-primary">
					  <div class="panel-heading clearfix">
						<span class="pull-left"><h4 class="text-white">Latest Article</h4></span>
						
						<?php if(isset($article_list)&& count($article_list)>0){ ?>
						<a  href="<?php echo base_url('Article/lists'); ?>" class="pull-right"> <span style="color:#fff"> View all</span>&nbsp;&nbsp; </a>
						<?php } ?>
					  </div>
					 
				</div>
				<div class="clearfix">&nbsp;</div>
				
				<?php if(isset($article_list)&& count($article_list)>0){ ?>
				
				<?php foreach($article_list as $list){ ?>
				<div class="article">
					   <div class="row">
						  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							 <div class="article-head clearfix">
								<span class="pull-left">
								   <h4 class="text-white"><?php echo isset($list['article_type'])?$list['article_type']:''; ?></h4>
								</span>
							 </div>
						  </div>
						  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							 <div class="article-body clearfix">
								<div class="row">
								   <div class="col-lg-2 col-md-3 col-sm-2 col-xs-4 p0">
									  <div class="article-view">
										 <div class="tabl">
											<img src="<?php echo base_url('assets/article_in_press/'.$list['image']); ?>" align="left" alt="<?php echo isset($list['title'])?$list['title']:''; ?>">
										 </div>
									  </div>
								   </div>
								   <div class="col-lg-10 col-md-9 col-sm-10 col-xs-8">
									  <div class="article-details">
										 <h4><a href="<?php echo base_url('journals'); ?>" target="_blank" style="color:#0062C4;"><?php echo isset($list['title'])?$list['title']:''; ?></a></h4>
										 <!--<span class="name"><?php echo isset($list['author_name'])?$list['author_name']:''; ?></span>-->
										 <h6><a href="#" target="_blank" style="color:#F60;"><?php echo isset($list['author_name'])?$list['author_name']:''; ?></a></h6>
										 <p class="art-date"><a href="<?php echo base_url('journals'); ?>" ><?php echo isset($list['journaltitle'])?$list['journaltitle']:''; ?></a></p>
									  </div>
								   </div>
								</div>
								<div class="row">
								   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									  <div class="get-here">
										 <ul>
											<li>
											   <a href="<?php echo base_url('assets/article_in_press/'.$list['pdf_file']); ?>" target="_blank" class="btn btn-primary " style="font-size:12px;" download> <i class="fa fa-unlock-alt"></i>&nbsp; PDF</a>
											</li>
											<li>
											   <a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" target="_blank" class="btn btn-warning " style="font-size:12px;"> <i class="fa fa-code" aria-hidden="true"></i> HTML</a>
											</li>
											<li>
											   <a href="javascript:void(0);" class="btn btn-success " style="font-size:12px;">  <i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; <?php echo date('M d ,Y',strtotime(htmlentities($list['create_at'])));?></a>
											</li>
											<li>
											</li>
										 </ul>
									  </div>
								   </div>
								</div>
							 </div>
						  </div>
					   </div>
					</div>

				
				<?php } ?>
				<?php } ?>
				
				
				
				
                

           </div>
		   <div class="col-md-4 mt20">
   <div class="sidebar side-bar right-sidebar">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Latest Updates Scrolling</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
              <?php if(isset($lastest_updates_list)&& count($lastest_updates_list)>0){ ?>
				
					<?php foreach($lastest_updates_list as $list){ ?>
						
						<ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="javascript:void(0);" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['updates'])?$list['updates']:''; ?></a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;"><a href="javascript:void(0);" > <?php echo isset($list['title'])?$list['title']:''; ?></a></span>
					  
						 <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>					  
					  
					  
					<?php } ?>
				<?php } ?>
            </marquee>
            
         </div>
      </div>
	   <!-- Widget Start -->
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Submit Manuscript</h3>
         <div class="cp-newsletter-holder">
           <a href="<?php echo base_url('menuscript');?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/Medical-Journals.jpg" alt="submit Manuscript"></a>
         </div>
      </div>
      <!-- Widget Start -->
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Track Your Article</h3>
         <div class="cp-newsletter-holder">
            <!-- Post Comments Form -->
            <div class="cp-comments-form">
               <form method="post" id="trackarticleform" class="material" action="#">
                  <div class="material-input input"><input type="text" name="trackmanuscriptid" class="form-control" placeholder="Enter Manuscript ID" style="width:100%;" onkeypress="return checkspecial_menuscript(event);" required="" id="trackmanuscriptid"><span class="material-bar"></span></div>
                  <span class="error_msg"></span>           
                  <div class="material-input input"><input type="email" name="trackemail" class="form-control" placeholder="Enter Email" style="width:100%;" onkeypress="return checkspecialname(event);" required="" id="trackemail"><span class="material-bar"></span></div>
                  <span class="error_msg"></span> 
                  <input type="submit" name="btntrackarticle" id="btntrackarticle" value="Submit" class="btn btn-large" style="float:right;">
               </form>
            </div>
            <!-- Page content End --> 
         </div>
      </div>
      <!-- Widget End --> 
      <!-- Widget Start -->
      <!-- Widget End --> 
      <!--Featured Post Widget Start -->
     
     
      <!-- Widget Start -->
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Sign up For Newsletter</h3>
         <div class="cp-newsletter-holder">
            <!-- Post Comments Form -->
            <div class="cp-comments-form">
               <form name="newsletters" id="signupnews" class="material" method="post" action="<?php echo base_url('home/newsletterpost'); ?>" novalidate="novalidate">
                  <div class="material-input input"><input type="text" name="name" class="form-control" placeholder="Name*" style="width:100%;" required  id="txtFirstName"><span class="material-bar"></span></div>
                  <span class="error_msg"></span>           
                  <div class="material-input input"><input type="email" name="email" class="form-control" placeholder="Email*" style="width:100%;" required  id="txtEmail"><span class="material-bar"></span></div>
                  <span class="error_msg"></span>
                  <input type="submit" name="btnSign" id="btnSign" value="Submit" class="btn btn-large" style="float:right;">
               </form>
            </div>
            <!-- Page content End --> 
         </div>
      </div>
      <!-- Widget End --> 
      <!-- Tags Start -->
      <div class="widget tags-widget">
         <h3 class="side-title">Browse by Subject</h3>
         <div class="cp-sidebar-content">
		 <?php //echo '<pre>';print_r($browse_by_subjects);exit; ?>
		  <?php if(isset($browse_by_subjects)&& count($browse_by_subjects)>0){ ?>
				
					<?php foreach($browse_by_subjects as $list){ ?>
						
							<a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>" ><?php echo isset($list['subject'])?$list['subject']:''; ?></a>
					<?php } ?>
					<?php } ?>
           
         </div>
      </div>
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Latest Article Scrolling</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
               </p>
					   <?php if(isset($article_list)&& count($article_list)>0){ ?>
				
					<?php foreach($article_list as $list){ ?>
					   <ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['title'])?$list['title']:''; ?></a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;">Author Name: <a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" > <?php echo isset($list['author_name'])?$list['author_name']:''; ?></a></span>
					   <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
					<?php } ?>
				<?php } ?>
            </marquee>
            
         </div>
      </div>
      <!-- Facebook End --> 
   </div>
</div>


            </div>
          
        </div><!--property container-->
        <div class="divide40"></div>

       
       
        
         <div class="divide40"></div>
        
         
         
         
         <div class="search-filter">
            <div class="container">
                    <div class="row">
                       
                       <div class="col-md-10 col-xs-12">
                           <h3>Bibliotics Journals</h3>
                           <p>Bibliotics Journals is an emerging scientific online open access publisher keeping a goal to serve professional and academic communities in latest research discoveries and developments.</p>
                       </div>  
                       <div class="col-md-2 col-xs-12 text-center padding_0">
                           <a href="<?php echo base_url('contactus'); ?>" class="btn btn-red btn-lg btn-block ">CONTACT US</a>
                       </div>
                       <!--  <div class="col-md-3 col-sm-6 margin20">
                            <a href="#" class="btn btn-red btn-lg btn-block"><i class="fa fa-search"></i>Search</a>
                        </div> -->
                    </div>
               
            </div>
        </div>
		
