<div class="divide60"></div>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					
					<h3 class="">GRF    
						<span class="text-success">Membership </span> 
					</h3>
					<p>GRF consider research work for publication from any part of the world and ensure that all submissions are gone through peer review process. All our reviewers undertake to keep submitted manuscripts and associated data confidential.The quick and efficient review and publication process makes your papers available in online to all the readers once uploaded in our website. We are honoured to welcome authors to visit our webpage and submit their scientific papers to our journal. In short, our goal is to expand the boundaries of knowledge for the benefit of humanity.</p>
					
					<br>
					<h3 class="">Advantages    
						<span class="text-success"> </span> 
					</h3>
					<p>The Membership plans give access to the author for publishing an endless number of manuscripts in the time period of membership. If you are the author or the co-author of a paper, then you will be sanctioned a good waiver on the articles.</p>
					<br>
					<h4>Annual membership</h4>
					<p>A member can submit a spontaneous number of articles to any of our journals. Member will get a waiver on registration for the events that are organized by our Publisher.
					Member will get a prestigious certificate of Annual membership from our Publisher.
					</p>
					<br>
					<h4>Three-year membership</h4>
					<p>Member can submit unsolicited number of articles to any of the GRF Publishers 
Member will get waiver on registration for any two.GRF Publishers
Member will get a prestigious certificate of Three-year membership from GRF Publishers.
</p>
					<br>
					<h4> Five-year membership</h4>
					<p>Member can submit unsolicited number of articles to any of the GRF Publishers
Member will get a prestigious certificate of Five-year membership from GRF Publishers.
</p>
					
				<table align="left" cellspacing="0" cellpadding="0" border="0" class="table ">
					<tbody>
						<tr class="text-white ">
							<td class="bg_color">Membership</td>
							<td class="bg_color">Annual</td>
							<td class="bg_color">Three years</td>
							<td class="bg_color">Five years</td>
						</tr>
						<tr>
							<td>Individual</td>
							<td>$ 5000</td>
							<td>$ 10000</td>
							<td>$ 15000</td>
						</tr>
						<tr>
							<td>University/Institute</td>
							<td>$ 10000</td>
							<td>$ 18000</td>
							<td>$ 25000</td>
						</tr>
						<tr>
							<td>Industries/Organizations</td>
							<td>$ 15000</td>
							<td>$ 23000</td>
							<td>$ 30000</td>
						</tr>
					</tbody>
				</table>
					
				
				
				
					
                   
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
