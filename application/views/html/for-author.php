 <div class="container " >
 <br>
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					
					<h3 class="">Authors    
						<span class="text-success">Guidelines </span> 
					</h3>
					
					<br>
					
					
					<div class="lis-sty-none">
					<br>
					<p ><strong>  Title/Heading :</strong> Suitable to the subject and not irrelevant to its detail work.</p>
					<p ><strong> Author Affiliation:</strong> Respective Author Full Name, Department/Institution/University, City should be drafted with the article.</p>
					<p ><strong> Corresponding Author:</strong> Full Name, Department/Institution/University, City, State, Country, Telephone, Fax and Email.</p>
					<p ><strong> Corresponding author:</strong> Times New Roman, 10 Normal, and Justified</p>
					<p ><strong>Abstract:</strong> Should be relevant, self?explanatory, comprehensive and brief in nature correlating to the total subject matter and give a notion as summary to the detailed script portrayed by the author while getting the experiment findings in exhaustive manner. It should also relate to significant outcome and further scope to continue in the field.</p>
					<p ><strong>Keywords</strong> In alphabetical order, separated with semicolons and exhibit catchy nature with respect to the subject.</p>	
					<p ><strong>Text </strong> includes the following</p>
					<div class="lis-sty-none">
					<ul>
						<li> <strong>Introduction:</strong> States the reason for the research: identifies and discusses findings of others, includes a review of the literature.</li>	
						<li> <strong>Materials and Methods:</strong>  describes the research population or study sample, describes the method used to gather information or data collection and describes the means used for measuring or measures.</li>	
						<li> <strong>Results:</strong> summarizes the results and present findings using text, charts, graphs and tables, Legends for tables, charts, graphs and figures.</li>
						<li> <strong>Discussion: </strong> analyzes findings, explains the significance of the research, and suggests future projects</li>
						<li> <strong>References: </strong> an alphabetical listing of works that were cited and used to support the research</li>
					</ul>
					</div>
					</div>
					
						<p ><strong>Acknowledgement :</strong> <br>Includes affirmation of individuals, grant details, funds, and conflict of interest.
						<br>Format preferably in Word?Processing i.e. Microsoft word (DOC, DOCX).</p>
					
					
                   
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