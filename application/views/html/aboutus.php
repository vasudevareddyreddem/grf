      
        <div class="divide60"></div>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					
					<p >Bibliotics publishes international, peer-reviewed science, medicine, and engineering journals. It is an Open Access platform to support scientific innovation and advancement in the research community by increasing access to peer-reviewed quality research articles.

We host internationally-recognized, peer-reviewed journals to serve the scientific and medical community with validated and quality content across the broad range of disciplines, including medicine, clinical science, chemistry, and engineering. The Bibliotics Member Journals Editorial Board and Review Board ensures Bibliotics maintain the highest standards in scientific rigor. Additionally, all of the articles published with Bibliotics Central are permanently archived, providing unrestricted use and dissemination of the scientific information. All content is published under the Creative Commons Attribution License.
					</p>
					<br>
					
					<h4 class="">Our  
						<span class="text-success">Mission</span> 
					</h4>
					<div class="lis-sty-none">
					<ul>
						<p> Bibliotics encourages the advancement of high-quality research on the international stage by supporting the science and technology publishing and the unrestricted flow of scientific information through the Open Access platform.</p>
					</ul>
					</div>
					<br>
					<h4 class="">Articleprocessing  
					</h4>
					<div class="lis-sty-none">
					<ul>
					<p>
					All submitted articles will be initially subjected to editorial procedures, if found suitable for publishing will be sent to reviewers for peer review. It is not mandatory for the editor to send the articles only to the reviewer referred by authors; it is at discretion of the editor to send articles to any reviewer of his/ her choice. Once the review process is over and the article is accepted authors will be intimated over mail with the galley proof which the author is insisted to reply within 7 days of time, after which the article will be sent for publishing.
					</p>
					</ul>
					</div>
					<br>
					
					<h4 class="">Frequency of  
						<span class="text-success"> publication</span> 
					</h4>
					<div class="lis-sty-none">
					<ul>
						<p> Bibliotics is published as monthly journal with 12 issues per year. Special editions are also planned subjected to the scope and need. Currently Bibliotics is also publishing peer reviewed papers of International and National level conferences conducted by various research and academic institutions.</p>
					</ul>
					</div>
					<h4 class="">Submission of  
						<span class="text-success"> articles</span> 
					</h4>
					<div class="lis-sty-none">
					<ul>
						<p> Authors are invited to submit their research articles, review papers properly formatted as per the author guidelines to <a href="<?php echo base_url('manuscript'); ?>">Manuscript</a></p>
					</ul>
					</div>
                   
                </div>
				
					
				</div>
		   <div class="col-md-4 mt20">
		     <div id="myCarousel" class="carousel slide " data-ride="carousel">
                        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                            
                 <?php if(isset($flyers_list)&& count($flyers_list)>0){ ?>
				
						<?php $count=1;foreach($flyers_list as $list){ ?>
							<?php if($count==1){ ?>
									<div class="item active">
									   <img src="<?php echo base_url('assets/flyers_img/'.$list['fly_image']); ?>">
										<div class="carousel-caption">
										<p> 
										<a class="btn btn-primary" href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>">
									   <?php echo isset($list['title'])?$list['title']:''; ?></a></p>
														
										</div>
									</div>
							<?php }else{ ?>
									<div class="item">
									   <img src="<?php echo base_url('assets/flyers_img/'.$list['fly_image']); ?>">
										<div class="carousel-caption">
										<p> 
										<a class="btn btn-primary" href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>">
									   <?php echo isset($list['title'])?$list['title']:''; ?></a></p>
														
										</div>
									</div>
							<?php } ?>
						
						<?php $count++;} ?>
					<?php } ?>
        
                
   			</div><!-- End Carousel Inner -->
   						
   			<ul class="list-group col-md-3 carousel-indicators">
                 <?php if(isset($flyers_list)&& count($flyers_list)>0){ ?>
					<?php $cnt=1;foreach($flyers_list as $list){ ?>
							<?php if($count=1){ ?>
								<li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="active"></li>
							<?php }else{ ?>
							        <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" ></li>

							<?php } ?>
					
					<?php $cnt++;} ?>
				<?php } ?>
               
    		</ul>
        </div><br>
   <div class="sidebar side-bar right-sidebar">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">List  of journals</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
                  <?php if(isset($journals_list)&& count($journals_list)>0){ ?>
					<?php foreach($journals_list as $list){ ?>
							
					   <ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>" target="_blank" style=" color:#05658F; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['title'])?$list['title']:''; ?></a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span class="" style="color: #05658F; text-decoration: none; font-weight: bold;"> <i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>"> view</a></span>
					   </p>
					   <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
					   
				<?php } ?>
			<?php } ?>
               
            </marquee>
            
         </div>
      </div>

  
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
                           <h3>GRF Publishers</h3>
                           <p>Global Research Federation is an emerging scientific online open access publisher keeping a goal to serve professional and academic communities in latest research discoveries and developments.</p>
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
		<script>
	$(document).ready(function(){
		$("#readmore1").click(function(){
			$("#readexp").toggle();
		});
	});
</script>