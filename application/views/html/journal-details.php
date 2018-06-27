     <?php if(isset($homapage_banners) && count($homapage_banners)>0){ ?>
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
							<img src="<?php echo base_url('assets/journal_banner_pics/'.$list['baneer_image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<div class="slide-text slide_style_center">
										<h1 data-animation="animated zoomInRight"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
									</div>
								</div>
							</div>
						</div>
				<?php }else{ ?>
						<div class="item">

							<!-- Slide Background -->
							<img src="<?php echo base_url('assets/journal_banner_pics/'.$list['baneer_image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<div class="slide-text slide_style_center">
										<h1 data-animation="animated zoomInRight"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
									</div>
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
		 <?php } ?>
		<div class="container " >
            <div class="row">
				<div class="col-md-9">
					<div class="bg_color2">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab1primary" data-toggle="tab">Home</a></li>
								<li><a href="#tab2primary" data-toggle="tab"> Board Members</a></li>
								<li><a href="#tab3primary" data-toggle="tab"> Article In Press</a></li>
								<li><a href="#tab4primary" data-toggle="tab">Current Issue</a></li>
								<li><a href="#tab5primary" data-toggle="tab">Archive</a></li>
								<li><a href="#tab6primary" data-toggle="tab">Article Process Fee</a></li>
								<li><a href="#tab7primary" data-toggle="tab">Special Issue</a></li>
								
							</ul>
					</div>
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1primary">
							 <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					<br>
					<?php echo isset($journals_details['description'])?$journals_details['description']:''; ?>
					<div class="lis-sty-none">
					<?php echo isset($journals_details['key_words'])?$journals_details['key_words']:''; ?>
					</div>
					
					
					
                   
                </div>
							
							</div>
							<div class="tab-pane fade" id="tab2primary">
								<div class="row">
           
			<!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p> 
									<div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div><div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div>
									

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
			<!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p> 
									<div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div><div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div>
									

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
			<!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p> 
									<div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div><div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div>
									

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member --><!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p> 
									<div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div><div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div>
									

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
			<!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p> 
									<div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div><div class="text-left"><strong>Lorem Ipsum </strong> is simply dummy text of the printing and typesetting industry. </div>
									

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
           
          

        </div>
							</div>
							<div class="tab-pane fade" id="tab3primary">
							
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
										 <h4><a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" target="_blank" style="color:#0062C4;"><?php echo isset($list['title'])?$list['title']:''; ?></a></h4>
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
											   <a target="_blank" href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" target="_blank" class="btn btn-warning " style="font-size:12px;"> <i class="fa fa-code" aria-hidden="true"></i> HTML</a>
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
							<div class="tab-pane fade" id="tab4primary">
								<div class="article">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="article-head clearfix">
								<span class="pull-left"><h4 class="text-white">Research Article</h4></span>

							</div>
						</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="article-body clearfix">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-2 col-xs-4 p0">
							<div class="article-view">
								<div class="tabl">
									<img src="http://grfpublishers.com/public/journals/59/journalThumbnail_en_US.jpg" align="left" alt="Article Image">
								</div>
							</div>
						</div>
						<div class="col-lg-10 col-md-9 col-sm-10 col-xs-8">
							<div class="article-details">
								<h4><a href="#" target="_blank" style="color:#0062C4;">An Exploration into the Acceptance of Male Rape Myths within the UK</a></h4>
								<span class="name">Elizabeth Spruin* and Miss Laura Reilly</span>
								<h6><a href="#" target="_blank" style="color:#F60;">Journal of Forensic Sciences &amp; Criminal Investigation </a></h6>
									  <p class="art-date">DOI:<a href="http://dx.doi.org/10.19080/JFSCI.2018.09.555763" target="_blank">10.19080/JFSCI.2018.09.555763</a></p>
							  </div>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="get-here">
					<ul>
					<li>
					<a href="" target="_blank" class="btn btn-primary " style="font-size:12px;"> <i class="fa fa-unlock-alt"></i>&nbsp; PDF</a>
					</li>
					<li>
					<a href="" target="_blank" class="btn btn-warning " style="font-size:12px;"> <i class="fa fa-code" aria-hidden="true"></i> HTML</a>
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
				<div class="article">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="article-head clearfix">
								<span class="pull-left"><h4 class="text-white">Research Article</h4></span>

							</div>
						</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="article-body clearfix">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-2 col-xs-4 p0">
							<div class="article-view">
								<div class="tabl">
									<img src="http://grfpublishers.com/public/journals/59/journalThumbnail_en_US.jpg" align="left" alt="Article Image">
								</div>
							</div>
						</div>
						<div class="col-lg-10 col-md-9 col-sm-10 col-xs-8">
							<div class="article-details">
								<h4><a href="#" target="_blank" style="color:#0062C4;">An Exploration into the Acceptance of Male Rape Myths within the UK</a></h4>
								<span class="name">Elizabeth Spruin* and Miss Laura Reilly</span>
								<h6><a href="#" target="_blank" style="color:#F60;">Journal of Forensic Sciences &amp; Criminal Investigation </a></h6>
									  <p class="art-date">DOI:<a href="http://dx.doi.org/10.19080/JFSCI.2018.09.555763" target="_blank">10.19080/JFSCI.2018.09.555763</a></p>
							  </div>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="get-here">
					<ul>
					<li>
					<a href="" target="_blank" class="btn btn-primary " style="font-size:12px;"> <i class="fa fa-unlock-alt"></i>&nbsp; PDF</a>
					</li>
					<li>
					<a href="" target="_blank" class="btn btn-warning " style="font-size:12px;"> <i class="fa fa-code" aria-hidden="true"></i> HTML</a>
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
				<div class="article">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="article-head clearfix">
								<span class="pull-left"><h4 class="text-white">Research Article</h4></span>

							</div>
						</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="article-body clearfix">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-2 col-xs-4 p0">
							<div class="article-view">
								<div class="tabl">
									<img src="http://grfpublishers.com/public/journals/59/journalThumbnail_en_US.jpg" align="left" alt="Article Image">
								</div>
							</div>
						</div>
						<div class="col-lg-10 col-md-9 col-sm-10 col-xs-8">
							<div class="article-details">
								<h4><a href="#" target="_blank" style="color:#0062C4;">An Exploration into the Acceptance of Male Rape Myths within the UK</a></h4>
								<span class="name">Elizabeth Spruin* and Miss Laura Reilly</span>
								<h6><a href="#" target="_blank" style="color:#F60;">Journal of Forensic Sciences &amp; Criminal Investigation </a></h6>
									  <p class="art-date">DOI:<a href="http://dx.doi.org/10.19080/JFSCI.2018.09.555763" target="_blank">10.19080/JFSCI.2018.09.555763</a></p>
							  </div>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="get-here">
					<ul>
					<li>
					<a href="" target="_blank" class="btn btn-primary " style="font-size:12px;"> <i class="fa fa-unlock-alt"></i>&nbsp; PDF</a>
					</li>
					<li>
					<a href="" target="_blank" class="btn btn-warning " style="font-size:12px;"> <i class="fa fa-code" aria-hidden="true"></i> HTML</a>
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
							
							</div>
							<div class="tab-pane fade" id="tab5primary">
								<div class="row">
									<div class="col-md-4">
										<img style ="" class= "img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/archive_img.jpg" alt="archive 2018">
										<div class="text-archive-img">
											<h3 class="">About    
						<span class="text-success"> 2016</span> 
					</h3>
										</div>
									</div>
									<div class="col-md-4">
										<img style ="" class= "img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/archive_img.jpg" alt="archive 2018">
										<div class="text-archive-img">
											<h3 class="">About    
						<span class="text-success"> 2017</span> 
					</h3>
										</div>
									</div>
									<div class="col-md-4">
										<img style ="" class= "img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/archive_img.jpg" alt="archive 2018">
										<div class="text-archive-img">
											<h3 class="">About    
						<span class="text-success"> 2018</span> 
					</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab6primary">Primary 5</div>
							<div class="tab-pane fade" id="tab7primary">Primary 5</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 mt20">
   <div class="sidebar side-bar right-sidebar">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Latest Board Members</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
               <ul>
                  <li style="padding:0px 0px 0px 10px">
                     <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
                     <a href="" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a><br>
                  </li>
               </ul>
               <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
                  <span style="color: #05658F; text-decoration: none; font-weight: bold;">PMID: <a href="#" target="_blank"> 29645007</a></span>
               </p>
               <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
			   <ul>
                  <li style="padding:0px 0px 0px 10px">
                     <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
                     <a href="" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a><br>
                  </li>
               </ul>
               <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
                  <span style="color: #05658F; text-decoration: none; font-weight: bold;">PMID: <a href="#" target="_blank"> 29645007</a></span>
               </p>
               <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p><ul>
                  <li style="padding:0px 0px 0px 10px">
                     <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
                     <a href="" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a><br>
                  </li>
               </ul>
               <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
                  <span style="color: #05658F; text-decoration: none; font-weight: bold;">PMID: <a href="#" target="_blank"> 29645007</a></span>
               </p>
               <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
			   <ul>
                  <li style="padding:0px 0px 0px 10px">
                     <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
                     <a href="" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a><br>
                  </li>
               </ul>
               <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
                  <span style="color: #05658F; text-decoration: none; font-weight: bold;">PMID: <a href="#" target="_blank"> 29645007</a></span>
               </p>
               <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
			   <ul>
                  <li style="padding:0px 0px 0px 10px">
                     <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
                     <a href="" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a><br>
                  </li>
               </ul>
               <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
                  <span style="color: #05658F; text-decoration: none; font-weight: bold;">PMID: <a href="#" target="_blank"> 29645007</a></span>
               </p>
               <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
			   <ul>
                  <li style="padding:0px 0px 0px 10px">
                     <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
                     <a href="" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a><br>
                  </li>
               </ul>
               <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
                  <span style="color: #05658F; text-decoration: none; font-weight: bold;">PMID: <a href="#" target="_blank"> 29645007</a></span>
               </p>
               <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
               
            </marquee>
            
         </div>
      </div>
			</div>
			<div class="clearfix">&nbsp;</div>
			
			<div class="sidebar side-bar right-sidebar">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Latest Board Members</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
              <div class="article">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="article-head clearfix">
								<span class="pull-left"><h4 class="text-white">Research Article</h4></span>

							</div>
						</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="article-body clearfix">
					<div class="row">
						<div class="col-md-12 ">
								<div class="">
									<img src="http://grfpublishers.com/public/journals/59/journalThumbnail_en_US.jpg" align="left" alt="Article Image">
								</div>
							</div>
						</div>
						<div class=" col-md-12 ">
							<div class="">
								<h4><a href="#" target="_blank" style="color:#0062C4;">An Exploration into the Acceptance of Male Rape Myths within the UK</a></h4>
								<span class="name">Elizabeth Spruin* and Miss Laura Reilly</span>
								<h6><a href="#" target="_blank" style="color:#F60;">Journal of Forensic Sciences &amp; Criminal Investigation </a></h6>
									  <p class="art-date">DOI:<a href="http://dx.doi.org/10.19080/JFSCI.2018.09.555763" target="_blank">10.19080/JFSCI.2018.09.555763</a></p>
							  </div>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="get-here">
					<ul>
					<li>
					<a href="" target="_blank" class="btn btn-primary " style="font-size:12px;"> <i class="fa fa-unlock-alt"></i>&nbsp; PDF</a>
					</li>
					<li>
					<a href="" target="_blank" class="btn btn-warning " style="font-size:12px;"> <i class="fa fa-code" aria-hidden="true"></i> HTML</a>
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
               <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
			   
               
            </marquee>
            
         </div>
      </div>
			</div>
		</div>
				
			</div>
		</div>
       
