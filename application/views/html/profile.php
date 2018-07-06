<div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					<br>
					
					
					<div class="row">
					
					<div class="col-md-4">
					<?php if($editor_details['image']!=''){ ?>
						<img  class=" img-fluid thumbnail" style="width:150px;height:auto;" src="<?php echo base_url('assets/editors_pics/'.$editor_details['image']); ?>" alt="card image">
					<?php }else{ ?>
						<img  class=" img-fluid thumbnail" style="width:150px;height:auto;" src="<?php echo base_url('assets/vendor/img/board.png'); ?>" alt="card image">
					<?php } ?>
						<h3><?php echo isset($editor_details['name'])?$editor_details['name']:''; ?></H3>
					</div>
					<div class="col-md-4">
						<table class="table ">
					
						<tr>
							<th style="border-top:none">Name</th>
							<td style="border-top:none"><?php echo isset($editor_details['name'])?$editor_details['name']:''; ?></td>
						</tr>
						<!--<tr>
							<th>Email</th>
							<td><?php echo isset($editor_details['email'])?$editor_details['email']:''; ?></td>
						</tr>
						<tr>
							<th>Phone Number</th>
							<td><?php echo isset($editor_details['phone'])?$editor_details['phone']:''; ?></td>
						</tr>
						<tr>
							<th>Designation</th>
							<td><?php echo isset($editor_details['designation'])?$editor_details['designation']:''; ?></td>
						</tr>-->
						<tr>
							<th>University</th>
							<td><?php echo isset($editor_details['university'])?$editor_details['university']:''; ?></td>
						</tr>
						<tr>
							<th>Country</th>
							<td><?php echo isset($editor_details['country'])?$editor_details['country']:''; ?></td>
						</tr><tr>
							<th>Position</th>
							<td><?php echo isset($editor_details['position'])?$editor_details['position']:''; ?></td>
						</tr>
						</table>
					</div>
					</div>
					<br>
					<h3 class="">  
						<span class="text-success">Biogaphy</span> 
					</h3>
					<p><i><?php echo isset($editor_details['biography'])?$editor_details['biography']:''; ?></i>
					</p>
				
                   
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
							 <a href="" target="_blank" style=" color:#05658F; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['title'])?$list['title']:''; ?></a><br>
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