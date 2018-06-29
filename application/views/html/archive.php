<div class="container " >
<br>
	<div class="row">
		<h3 class="">  Archives
						<span class="text-success">List</span> 
					</h3>
				
	<div class="col-md-9">
		
				<?php if(isset($article_list)&& count($article_list)>0){ ?>
				
				<?php //echo '<pre>';print_r($article_list);exit; ?>
				
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
										 <h6><a href="javascript:void(0);"  style="color:#F60;"><?php echo isset($list['author_name'])?$list['author_name']:''; ?></a></h6>
										 <p class="art-date"><a href="<?php echo base_url('journals/view/'.base64_encode($list['journal_id']).'/'.$list['url']); ?>" ><?php echo isset($list['journaltitle'])?$list['journaltitle']:''; ?></a></p>
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
	<div class="col-md-3 mt20">
   <div class="sidebar side-bar right-sidebar">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Latest Board Members</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
               
			      <?php if(isset($latest_boardmembers) && count($latest_boardmembers)>0){ ?>
				<?php foreach($latest_boardmembers as $list){ ?>
					<ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>" target="_blank" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['reviewer_board'])?$list['reviewer_board']:''; ?> </a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;">Name: <a href="<?php echo base_url('journals/board-profile/'.base64_encode($list['id'])); ?>" target="_blank"> <?php echo isset($list['name'])?$list['name']:''; ?></a></span>
					   </p>
					   <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p><?php } ?>
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
                       Quick Links
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                   <div class="">
					  <ul class="list-group">
						<li class="list-group-item"><a href="<?php echo base_url('home/for_author'); ?>">For Authors</a></li>
						<li class="list-group-item"><a href="">For Editors</a></li>
						<li class="list-group-item"><a href="">For Reviewers</a></li>    
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Editorial.pdf">Editorial</a></li>
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Research-Article.pdf">Research Article</a></li>
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Case-Report.pdf">Case Report</a></li>
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Review-Article.pdf">Review Article</a></li>  
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Opinion.pdf">Opinion</a></li>
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Short-Communication.pdf">Short Communication</a></li>
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Mini-Review.pdf">Mini Review</a></li>
						<li class="list-group-item"><a href="https://gavinpublishers.com/assets/img/links/Letter-to-Editor.pdf">Letter to Editor</a></li>
						 
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
		
       
