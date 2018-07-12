
        <div class="conainer-fulid">
            <div class="container">
			
                <div class="row">
                
                	<div class="divide-35">
                      
                      <div class="col-md-12">
                      	<div class="col-md-8">
                            <div class="row ">
						
			<div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
				<h3 class="">GRF    
					<span class="text-success">CONFERENCES </span> 
				</h3>
				<br>
				<p>Coming Soon</p>
				</div>
                                    
                            

                    </div>
		<div class="row">
		 <!--
		<div class="well2">
      <div class="media">
     
        <div class="col-md-12">
				<h3 class="">Upcoming    
					<span class="text-success">Conferences  </span> 
				</h3>
				<hr>
				<br>
				<div class="contact-info-blocks  hidden-xs ">
				  <marquee id='scroll_news'  >
					<div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();"><h4 class="text-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="text-danger"> | </span> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </h4></div>
				</marquee>
				</div>
       </div>
       
    </div>
  </div>-->


  
                                    

                                    
                                    </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="rightside-box">
								<?php if(isset($confrence_flyer_list)&& count($confrence_flyer_list)>0){ ?>
								<div class="box-bottom">
<h4>Conference Flyers</h4>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
	
				  <ol class="carousel-indicators">
						<?php $count=1;foreach($confrence_flyer_list as $list){ ?>
							<?php if($count==1){ ?>
								  <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="active"></li>
							  <?php }else{ ?>
									<li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>"></li>

							  <?php } ?>
						<?php $count++;} ?>
						 </ol>
		

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	<?php $cnt=0;foreach($confrence_flyer_list as $list){ ?>
				
				<?php //echo '<pre>';print_r($list);exit; ?>
				
				<?php if($cnt==0){ ?>
					  <div class="item active"> <a href="javascript:void(0);"><img src="<?php echo base_url('assets/conference_flyers_img/'.$list['fly_image']); ?>" alt="<?php echo isset($list['title'])?$list['title']:''; ?>" style="width:100%;"></a>
					  </div>
				<?php }else{ ?>
				 <div class="item"> <a href="javascript:void(0);"><img src="<?php echo base_url('assets/conference_flyers_img/'.$list['fly_image']); ?>" alt="<?php echo isset($list['title'])?$list['title']:''; ?>" style="width:100%;"></a>
				</div>
				<?php } ?>
	<?php $cnt++;} ?>

     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                                            </div>
<?php } ?>
	<div class="clearfix">&nbsp;</div>											
	<?php if(isset($journals_list) && count($journals_list)>0){ ?>	
	<div>
	  <div class="">
				<div class="artist-title col-md-12">
				 <a href="#">Journals</a><br/>
				
				</div>
                                               
            <div class="listing-tab col-md-12">
                 
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <?php foreach($journals_list as $list){ ?>
							<li><a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>"><?php echo isset($list['title'])?$list['title']:'';?></a> </li>
							<?php } ?>
                        
                            <li style="font-size:14px; text-transform:uppercase; font-weight:bold;"><a href="<?php echo base_url('journals'); ?>">View all</a></li>
                        </ul>
                        
                    </div>
                    
                  </div>
            </div>
        </div>
                                            	
                                            </div>
											
											<?php } ?>
                                            <div class="clearfix"></div>

                                            
                                </div>
                            </div>
                           
                      </div>
                      <div class="clearfix"></div> 
                    </div>
                    
                </div>
                
                
            </div>
        </div>
        </div>
         
      
        
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
        </div>
