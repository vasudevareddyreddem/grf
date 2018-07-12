      
        <div class=" bg-success" id="" style="height:100px;">
            <div class="container-fulid ">
                <div class="container padding_top_40">
                    <div class="row">
                      <div class="typography-section">
						  <div class="container label-sty">
							  <span class="head-journ">Journals</span> &nbsp;&nbsp;
							  <!--  <span><a class="label label-warning" href="#">All</a></span> 
							<span><a class="label label-primary" href="#">A</a></span>
							  <span><a class="label label-primary" href="#">B</a></span>
							  <span><a class="label label-primary" href="#">C</a></span>
							  <span><a class="label label-primary" href="#">D</a></span>
							  <span><a class="label label-primary" href="#">E</a></span>
							  <span><a class="label label-primary" href="#">F</a></span>
							  <span><a class="label label-primary" href="#">G</a></span>
							  <span><a class="label label-primary" href="#">H</a></span>
							  <span><a class="label label-primary" href="#">I</a></span>
							  <span><a class="label label-primary" href="#">J</a></span>
							  <span><a class="label label-primary" href="#">K</a></span>
							  <span><a class="label label-primary" href="#">L</a></span>
							  <span><a class="label label-primary" href="#">M</a></span>
							  <span><a class="label label-primary" href="#">N</a></span>
							  <span><a class="label label-primary" href="#">O</a></span>
							  <span><a class="label label-primary" href="#">P</a></span>
							  <span><a class="label label-primary" href="#">Q</a></span>
							  <span><a class="label label-primary" href="#">R</a></span>
							  <span><a class="label label-primary" href="#">S</a></span>
							  <span><a class="label label-primary" href="#">T</a></span>
							  <span><a class="label label-primary" href="#">U</a></span>
							  <span><a class="label label-primary" href="#">V</a></span>
							  <span><a class="label label-primary" href="#">W</a></span>
							  <span><a class="label label-primary" href="#">X</a></span>
							  <span><a class="label label-primary" href="#">Y</a></span>
							  <span><a class="label label-primary" href="#">Z</a></span>-->
							                
							  
						  </div>
						</div>
                    </div>
                </div>
            </div>
       </div>
       
      
       
       
       
       
       
       <div class="clear"></div>
        <div class="conainer-fulid">
            <div class="container">
                <div class="row">
                
                	<div class="divide-35">
                      <div class="home-doctors  clearfix">
					    <div class="container">
					        <div class="row">
<!-- entry1 -->					<?php if(isset($journals_list) && count($journals_list)>0){ ?>
								<?php foreach($journals_list as $list){ ?>
						            <div class="col-lg-3 col-md-3 col-sm-6  text-center doc-item">
				                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

					                        <ul class="list-inline social-lists animate">
												<li><a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>"><i class="fa fa-link" aria-hidden="true"></i> VIEW MORE</a></li>
											</ul>

	                                        <figure>
								                    <img width="670" height="500" src="<?php echo base_url('assets/banner_pics/'.$list['baneer_image']); ?>" class="doc-img animate attachment-gallery-post-single wp-post-image img-responsive" alt="<?php echo isset($list['seo_title'])?$list['seo_title']:''; ?>"> 
								            </figure>

						                    <div class="text-content">
						                        <h5><?php echo isset($list['title'])?$list['title']:''; ?></h5>
						                        <!-- <div class="for-border"></div> -->
						                       <!-- <h5><small>Dentist Title</small></h5>-->
						                    </div>
						                </div>
						            </div>
									
								<?php } ?>
								<?php } ?>
									
								
                                 
									<div class="visible-sm clearfix margin-gap"></div>
					      </div>
					    </div>
                    <div class="clear"></div>
                    </div>
                    
                </div>
                <!--<div class="divide-35">
                	<div style="text-align:center; font-size:18px;">
                    	<ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
 
</ul>
                    </div>
                </div>-->
                
            </div>
        </div>
        </div>
        </div>
         
      
        
          <div class="search-filter">
            <div class="container">
                    <div class="row">
                       
                       <div class="col-md-10 col-xs-12">
                           <h3>GRF PUBLISHERS </h3>
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
	