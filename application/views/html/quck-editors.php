      
        <br>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					
					<h3 class="">Editors   
						<span class="text-success">Guidelines</span> 
					</h3>
					<h4>Editorial Board Members Role and Responsibilities</h4>
					<p>The editorial board, sometimes known as the (editorial) advisory committee, is a team of individuals in the journal’s field. Some individuals may also belong to the editorial boards of other journals.</p>
					<div class="lis-sty-none">
					<ul>
						<li>Expertise in subject matter.</li>
						<li>Reviewing submitted manuscripts.</li>
						<li>Advising on journal policy and scope.</li>
						<li>Identifying subjects and conferences for special issues which they might also help to organize and/or guest edit.</li>
						<li>Attracting new authors and submissions.</li>
						<li>Ideally submitting some of their own work for consideration.</li>
						<li>To ensure a supply of high-quality manuscripts to the Publishing House(Gavin) in quantities that can maintain the publishing schedule of the journal; if insufficient manuscripts are being submitted, then you should discuss how to address this with your publishing contact.</li>
						<li>To keep vision that the subject matter of the manuscripts reflects any changes of direction in the field of study to incorporate newly-emerging work; this may necessitate inviting articles or special issues.</li>
						<li>Give suggestion in selection of the editorial board, in co-operation with your publishing contact.</li>
						<li>Continually engage the editorial board on the progress of the journal and update and include them on ideas for editorial development. The editorial board should be involved formally through an annual editorial board meeting or informally in ad hoc meetings and discussions.</li>
						<li>To provide strategic input into the journal’s development. The publishing contact will be in touch regularly to report on the journal’s performance and suggest possible strategies for development, as well as discuss your suggestions.</li>
						<li>Encouragement in highlighting commercial advertising, supplement, and reprint opportunities, if these forms act as important sources of revenue generation for the journal.</li>
						<li>Promotion of the journal among peers and colleagues.</li>
						
					</ul>
					</div>
					
					<div class="lis-sty-none">
						<p>Due to enormous number of submissions and the scope of the journal being broad it might not possible for one editor to make informed decisions about submissions in all subject areas. So categorically referred as with respect to contributions.</p>
					</div>
					<ol>
						<li><strong>Editor-in-chief.</li></strong>
						<li><strong>Co-Editors.</li></strong>
						<li><strong>Associate Editors.</li></strong>
						<li><strong>Section Editors.</li></strong>
						<li><strong>Editorial Advisor.</li></strong>
						<li><strong>External Editors.</li></strong>
						<li><strong>Guest Editors.</li></strong>
					<ol>
					
                   
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