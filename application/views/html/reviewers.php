      
        <br>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					
					<h3 class="">Reviewers   
						<span class="text-success">Guidelines</span> 
					</h3>
					<h4>Reviewers Role and Responsibilities</h4>
					<p>Reviewers provide an objective assessment of a submitted manuscript, and recommend whether a piece of work advances the field sufficiently to warrant authenticated publication.</p>
					<div class="lis-sty-none">
					<ul>
						<li>Reviewer will be much appreciable in following time lines to give relevant comments on the</li>
						<li>Assess the relevance of the work to the journal.</li>
						<li>Check the novelty of original articles.</li>
						<li>Ensure that all relevant work is cited and discussed as appropriate.</li>
						<li>Check that the methodology is appropriate and properly described.</li>
						<li>Verify whether the conclusions are supported by the results reported.</li>
						<li>Check that any appropriate statistical analyses have been carried out.</li>
						<li>Ensure that the paper is unambiguous and comprehensible, even if the English is not perfect.</li>
						<li>Thoroughly go through the paper and indicate if the paper requires any English grammar, punctuation or spelling to be revised.</li>
						<li>Scientific notations, equations, superscript, subscript, figure, diagrams, references, bibliography etc. are devoid of any errors.</li>
						
						
					</ul>
					</div>
					
					<div class="lis-sty-none">
						<p><strong class="text-primary">GRF Publishers </strong>follows ‘Double-blind’ peerreviewing - conceals both the authors’ and reviewers’ identities, to avoid potential bias against prestigiousauthors and influential authors who are judged on the paper rather than their reputation.</p>
						<p>Almost all papers ubmitted to reviewers for consideration will ultimately be accepted for publication or rejection; occasionally an author will withdraw their paper prior to have taken a decision. The best papers are innovative, well-researched, well-written and an asset to the respective journal field as it can set up a milestone in the field of scientific progress.</p>
					</div>
					<h3>Reviewers Opinion</h3>
					<p ><strong> A. Major or Minor Revision:</strong>  Common procedure under reviewing followed considering factors like Englishcomprehension, references editing, results explanation, figure reformatting etc.</p>
					<p ><strong> B. Reviewer Rejection:</strong> Reviewers have the capacity to make rejection for the manuscript if it is based on falsehood approach of presentation and scientific concept is not proven.</p>
					<p ><strong> C. Acceptance: </strong>  These manuscripts are acceptable as submitted if they are well written, easy to understand, if results support the conclusion, and they add to existing published knowledge extensively.</p>
					
                   
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