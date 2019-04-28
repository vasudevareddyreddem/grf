        <div class="conainer-fulid">
            <div class="container">
			
                <div class="row">
                
                	<div class="divide-35">
                      
                      <div class="col-md-12">
                      	<div class="col-md-8">
                            <div class="row ">
						
			<div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
				<h3 class="">Video    
					<span class="text-success">Articles </span> 
				</h3>
				<br>
				<p>GRF Publishers uniquely creates the opportunities for expanding its practical visual applicability of new electronic exposure through new technical methods approach in advanced research and science education by making and publishing videos of scientific experiments from the top laboratories, surgical operation treatments and clinical applications with innovative and recent developments at an international level.</p>
				<p>By enabling scientists, educators and students to see the intricate details of cutting-edge experiments
rather than read them in text articles, GRF Publishers increases research productivity and student
learning, saving their institutions time and money.</p>

				<p>
				Video articles are easy to submit and subject to a quick and transparent peer review process. Templates
ensure that video articles are actively reviewed, curated and formatted. In addition, the articles will be
online free open access and made available immediately upon publication. This format of presentation is
unique for those parts of world where language remains as problem in written format with grammar
context and translators etc.
				</p>
				<?php if(isset($video_list) && count($video_list)>0){ ?>
				 <?php foreach($video_list as $list){ ?>
				 <div style="padding:2px 0px;" class="video_article_name">
				 <hr style="margin:10px 0px;">
				   <h3><?php echo isset($list['journaltitle'])?$list['journaltitle']:''; ?> </h3>
					<h4><?php echo isset($list['title'])?$list['title']:''; ?> </h4>
					<video width="100%" height="460" controls="">
					<source src="<?php echo base_url('assets/videoarticle/'.$list['video']); ?>" type="video/mp4">
					</video>
					<div style="padding:10px 0px;">
						<span class="pull-left"><b >Author Name :</b>&nbsp; <?php echo isset($list['author_name'])?$list['author_name']:''; ?>  </span>
						<span class="pull-right"><b >Publishing date : </b> &nbsp; <?php echo isset($list['publishing_date'])?$list['publishing_date']:''; ?>  </span>
					</div>
					<div class="clearfix"></div>
					<div>
						<span  class="pull-left"><b> Accepting date :  </b> &nbsp;  <?php echo isset($list['accepting_date'])?$list['accepting_date']:''; ?> </span>
					</div>
					<div class="clearfix"></div>
				  </div>
				<?php } ?>
				<?php } ?>
	   
       </div>
	  
       
    


  
                                    

                                    
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
         
      
        
          
