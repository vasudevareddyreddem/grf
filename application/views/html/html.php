  <style>
  .html-tabs li {
	  display:block;
	  float:none;
	  border-bottom:1px solid #fff;
	  margin:20px 0px;
	  background:#ddd;
  } 
  .html-tabs li > a {

	  border:0px;
  }
  .my-20{
	  margin:20px 0px;
  }
  </style>
		<div class="container " >
            <div class="row">
				<div class="col-md-12">
					<br>
					<?php echo isset($article_details['research_article'])?$article_details['research_article']:'';?>
					
				
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="col-md-12 thumbnail">
					<div class=" col-md-3">
							<ul class="nav nav-tabs html-tabs">
								<li class="active"><a href="#tab1primary" data-toggle="tab">Abstract</a></li>
								<li><a href="#tab2primary" data-toggle="tab"> Article</a></li>
								<li><a href="#tab3primary" data-toggle="tab"> Figures</a></li>
								<li><a href="#tab4primary" data-toggle="tab">Tables</a></li>
								<li><a href="#tab5primary" data-toggle="tab">References</a></li>
								<li><a href="#tab6primary" data-toggle="tab">Suggested Citation</a></li>
								
							</ul>
					</div>
					<div class="col-md-9">
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1primary">
							 <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					<?php echo isset($article_details['abstract'])?$article_details['abstract']:'';?>
					
					
                   
						</div>
							
							</div>
							<div class="tab-pane fade" id="tab2primary">
							<div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
								<div class="row">
           
										<br>
										<?php echo isset($article_details['introduction'])?$article_details['introduction']:'';?></div>
							</div>
							</div>
							<div class="tab-pane fade" id="tab3primary">
				<div class="">
					<div class="row">
					<br>
								<h3 class="">Figures</h3>
					</div>
					
					<div class="row">
						
						<?php echo $article_details['figures'];?>
					</div>
				</div>
				
							
							</div>
							<div class="tab-pane fade" id="tab4primary">
							<br>
									<?php echo isset($article_details['tables'])?$article_details['tables']:'';?>
							
							</div>
							<div class="tab-pane fade" id="tab5primary">
								<div class="row">
								<br>
									<?php echo isset($article_details['references'])?$article_details['references']:'';?>
								</div>
							</div>
							<div class="tab-pane fade" id="tab6primary">
								<br><?php echo isset($article_details['suggested_citation'])?$article_details['suggested_citation']:'';?></div>
							
						</div>
					</div>
				</div>
				</div>
				
		</div>
				
			</div>
		</div>
       
