     
	 		<?php //echo '<pre>';print_r($board_members);exit; ?>

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
										<h1 class="fadeInDown wow animated" data-wow-duration="1000ms" data-wow-delay="1000ms"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
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
								<li class="active"><a onclick="show_boardmembers(1);" href="#tab1primary" data-toggle="tab">Home</a></li>
								<li><a onclick="show_boardmembers(0);" href="#tab2primary" data-toggle="tab"> Board Members</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab3primary" data-toggle="tab"> Article In Press</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab4primary" data-toggle="tab">Current Issue</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab5primary" data-toggle="tab">Archive</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab6primary" data-toggle="tab">Article Process Fee</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab7primary" data-toggle="tab">Special Issue</a></li>
								
							</ul>
					</div>
					<br>
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
			<?php if(isset($board_members) && count($board_members)>0){ ?>
					<?php foreach($board_members as $list){ ?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" style="width:100%;" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p>
											<?php if($list['image']!=''){ ?>
											<img class=" img-fluid" src="<?php echo base_url('assets/editors_pics/'.$list['image']); ?>" alt="<?php echo isset($list['name'])?$list['name']:''; ?>">
											<?php }else{?>
													<img class=" img-fluid" src="<?php echo base_url('assets/vendor/img/board.png'); ?>" alt="board member">
												<?php } ?>
											</p>
											<h4 class="card-title"><?php echo isset($list['name'])?$list['name']:''; ?></h4>
											<p class="card-text"><?php echo substr($list['biography'],0,160); ?>...</p>
											
										</div>
									</div>
								</div>
								<div class="backside" style="width:100%;">
									<div class="card">
										<div class="card-body  mt-4">
										<table class="table table-bordered">
										<tr>
											<th>Name</th>
											<td class="text-left" ><?php echo isset($list['name'])?$list['name']:''; ?></td>
										</tr>
										<tr>
											<th>University</th>
											<td class="text-left"><?php echo isset($list['university'])?$list['university']:''; ?> </td>
										</tr>
										<tr>
											<th>Country</th>
											<td class="text-left"><?php echo isset($list['country'])?$list['country']:''; ?> </td>
										</tr>
										<!--<tr>
											<th>Position</th>
											<td class="text-left"><?php echo isset($list['position'])?$list['position']:''; ?> </td>
										</tr>-->
										</table>
											<!--<h4 class="card-title ">Name</h4>
											<div class=""><?php echo isset($list['name'])?$list['name']:''; ?> </div>
											<h4 class="card-title ">University</h4>
											<div class=""><?php echo isset($list['university'])?$list['university']:''; ?> </div>
											<h4 class="card-title ">Country</h4>
											<div class=""><?php echo isset($list['country'])?$list['country']:''; ?> </div>-->
											
											<div >
											<a href="<?php echo base_url('journals/editors-profile/'.base64_encode($list['j_e_id'])); ?>" class="btn btn-success btn-sm text-center text-white">View More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			
				<?php } ?>
			<?php }else{ ?>
			Coming Soon
			<?php } ?>
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
										 <h6><a href="#" style="color:#F60;"><?php echo isset($list['author_name'])?$list['author_name']:''; ?></a></h6>
										 <p class="art-date"><a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?><?php echo base_url('journals'); ?>" ><?php echo isset($list['journaltitle'])?$list['journaltitle']:''; ?></a></p>
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
											<?Php if(isset($list['excel_file']) && $list['excel_file']!=''){ ?>
											<li>
											   <a href="<?php echo base_url('assets/article_in_press/'.$list['excel_file']); ?>" target="_blank" class="btn btn-danger " style="font-size:12px;" download><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp; Excel</a>
											</li>
											<?php } ?>
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
				<?php }else{ ?>
				Coming Soon
				<?php } ?>
				
				
							
							
							</div>
							<div class="tab-pane fade" id="tab4primary">
								<?php if(isset($current_issue_list)&& count($current_issue_list)>0){ ?>
									<?php foreach($current_issue_list as $list){ ?>
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
										 <h6><a href="#" style="color:#F60;"><?php echo isset($list['author_name'])?$list['author_name']:''; ?></a></h6>
										 <p class="art-date"><a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?><?php echo base_url('journals'); ?>" ><?php echo isset($list['journaltitle'])?$list['journaltitle']:''; ?></a></p>
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
																	<?Php if(isset($list['excel_file']) && $list['excel_file']!=''){ ?>
																	<li>
																	   <a href="<?php echo base_url('assets/article_in_press/'.$list['excel_file']); ?>" target="_blank" class="btn btn-danger " style="font-size:12px;" download><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp; Excel</a>
																	</li>
																	<?php } ?>
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
								<?php }else{ ?>
								Coming Soon
								<?php }?>
							</div>
							<div class="tab-pane fade" id="tab5primary">
								<div class="row">
								<?php if(isset($archive_list) && count($archive_list)>0){ ?>
										<?php $cnt=1;foreach($archive_list as $list){ ?>
										
										<div class="sidebar side-bar right-sidebar">
												<div class="widget sidebar-newsletter">
												 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														 <div class="panel panel-default">
														<div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $cnt; ?>" aria-expanded="false" aria-controls="collapseTwo">
												<h4 class="panel-title">
													<a class="collapsed" role="button" >
													  <?php echo isset($list['year'])?$list['year']:''; ?>
													</a>
												</h4>
											</div>
											<div id="collapseTwo<?php echo $cnt; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												<div class="panel-body">
												   <div class="">
													  <ul class="list-group">
														<?php foreach($list['issues_list'] as $lis){ ?>
														<a target="_blank" href="<?php echo base_url('journals/archive/'.base64_encode($lis['id'])); ?>">
															<div class="col-md-4">
																<img style ="" class= "img-responsive" src="<?php echo base_url('assets/issues/'.$lis['image']); ?>" alt="<?php echo isset($lis['year'])?$lis['year']:''; ?>">
																<div class="text-center">
																	<h3 class="">Issue : <?php echo isset($lis['number'])?$lis['number']:''; ?> -   
																		<span class="text-success"> <?php echo isset($lis['year'])?$lis['year']:''; ?></span> 
																	</h3>
																</div>
															</div>
															</a>
														<?php } ?>
													  </ul>
													</div>
												</div>
											</div>
											</div>
												</div>
												</div>
											</div>
											
											
											<?php $cnt++;} ?>
									<?php }else{ ?>
									Coming Soon
										<?php }?>
									
									
								</div>
							</div>
							<div class="tab-pane fade" id="tab6primary"><?php echo isset($article_process_fee['table'])?$article_process_fee['table']:'Coming Soon'; ?>
							</div>
							<div class="tab-pane fade" id="tab7primary">
							<?php echo isset($special_issue['details'])?$special_issue['details']:'Coming Soon'; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 mt20">
   <div class="sidebar side-bar right-sidebar" id="board_member" style="display:none;">
      <?php if(isset($reviewer_boardmembers) && count($reviewer_boardmembers)>0){ ?>
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Review Board Members</h3>
         <div class="cp-newsletter-holder" id="">
		  <div id="myCarousel" class="carousel  " data-ride="carousel"  data-interval="2000">
                        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			<?php $cnt=1;foreach($reviewer_boardmembers as $list){ ?>
				
				<?php if($cnt==1){ ?>
				<div class="item active">
					<?php if($list['image']!=''){ ?>
					<img style="width:100%" class="img-responsive" src="<?php echo base_url('assets/reviewerboard/'.$list['image']); ?>" alt="<?php echo isset($list['name'])?$list['name']:''; ?>">
					<?php }else{?>
					<img  style="width:100%;" class="img-responsive" src="<?php echo base_url('assets/vendor/img/board.png'); ?>" alt="board member">
					<?php } ?>
				  
				   	<div class="text-center">
										<p > 

					<a  class="text-center card-title" href="<?php echo base_url('journals/board_profile/'.base64_encode($list['id'])); ?>" target="_blank"><div><h4> <?php echo isset($list['name'])?$list['name']:''; ?></h4></div></a>
					</p>
				   </div>
				</div>
				<?php }else{ ?>
				
				<div class="item ">
			
				   <?php if($list['image']!=''){ ?>
					<img  style="width:100%" class="img-responsive" src="<?php echo base_url('assets/reviewerboard/'.$list['image']); ?>" alt="<?php echo isset($list['name'])?$list['name']:''; ?>">
					<?php }else{?>
					<img  style="width:100%;" class="img-responsive" src="<?php echo base_url('assets/vendor/img/board.png'); ?>" alt="board member">
					<?php } ?>
				 
				<div class="text-center">
										<p class="text-center"> 
					<a class="text-center card-title" href="<?php echo base_url('journals/board_profile/'.base64_encode($list['id'])); ?>" target="_blank"><div><h4> <?php echo isset($list['name'])?$list['name']:''; ?></h4></div></a>
						</p>
				  </div>
				</div>
				<?php } ?>
				
			<?php $cnt++;} ?>
								
				
								
				
   			</div>
   						
   			
        </div>
          <!--  <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
               <?php //echo '<pre>';print_r($board_members);exit; ?>
			   <?php if(isset($reviewer_boardmembers) && count($reviewer_boardmembers)>0){ ?>
				<?php foreach($reviewer_boardmembers as $list){ ?>
					   <ul>
						  <li style="padding:0px 0px 0px 10px">
							
							 <a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['journaltitile'])?$list['journaltitile']:''; ?> </a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;">Name: <a href="<?php echo base_url('journals/board_profile/'.base64_encode($list['id'])); ?>" target="_blank"> <?php echo isset($list['name'])?$list['name']:''; ?></a></span>
					   </p>
					   <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
				   <?php } ?>
			   <?php }else{ ?>
			    <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;"> Comming Soon</a></span>
					   </p>
			  
			   <?php } ?>
               
            </marquee>-->
            
         </div>
      </div>
	  <?php } ?>
			</div>
			<div class="clearfix">&nbsp;</div>
			<div class="sidebar side-bar right-sidebar" id="article_latest">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Latest Article</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
               
			   <?php if(isset($lastest_article) && count($lastest_article)>0){ ?>
				<?php foreach($lastest_article as $list){ ?>
					   <ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['title'])?$list['title']:''; ?> </a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;"><a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" target="_blank"> <?php echo isset($list['article_type'])?$list['article_type']:''; ?></a></span>
					   </p>
					   <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
				   <?php } ?>
			   <?php } ?>
               
            </marquee>
            
         </div>
      </div>
			</div>
			<div class="clearfix">&nbsp;</div>
			
			<div class="sidebar side-bar right-sidebar">
				<div class="widget sidebar-newsletter">
				 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					     <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" >
                       <i class="more-less glyphicon glyphicon-plus"></i> Quick Links
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                   <div class="">
					  <ul class="list-group">
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url('home/for_author'); ?> " >For Authors</a></li>
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url('home/quick_editors'); ?>">For Editors</a></li>
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url('home/reviewers'); ?>">For Reviewers</a></li>    
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>assets/vendor/quick-links/editorial.pdf">Editorial</a></li>
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>assets/vendor/quick-links/research-article.pdf">Research Article</a></li>
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>assets/vendor/quick-links/case-report.pdf">Case Report</a></li>
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>assets/vendor/quick-links/review-article.pdf">Review Article</a></li>  
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>assets/vendor/quick-links/opinion.pdf">Opinion</a></li>
						<li class="list-group-item"><a target="_blank" href="<?php echo base_url(); ?>assets/vendor/quick-links/short-communication.pdf">Short Communication</a></li>
						<!--<li class="list-group-item"><a target="_blank" href="https://gavinpublishers.com/assets/img/links/Mini-Review.pdf">Mini Review</a></li>
						<li class="list-group-item"><a  target="_blank" href="https://gavinpublishers.com/assets/img/links/Letter-to-Editor.pdf">Letter to Editor</a></li>-->
						 
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
		</div>
				
			</div>
		</div>
       <script>
	   function show_boardmembers(val){
		   if(val==0){
			  $('#board_member').show(); 
			  $('#article_latest').hide(); 
		   }else{
			   $('#board_member').hide(); 
			  $('#article_latest').show(); 
		   }
		   
	   }
       </script>
<script>
	function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>