<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="-1" />
        <title><?php echo isset($meta_title)?$meta_title:'GRF Publishers'; ?></title>
        <meta name="description" content="<?php echo isset($meta_description)?$meta_description:"GRF Publishers is a dedicated powerhouse for publishing informative journals in various areas of science, medicine. Peer-reviewed Journals| Medical Journals"; ?>">
		<meta name="keywords" content="<?php echo isset($meta_keywords)?$meta_keywords:"peer reviewed medical journals, medical articles online, journal of medical informatics, latest medical journal articles, journal of medical research"; ?>">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		 <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrapValidator.min.css" rel="stylesheet">
        <!-- custom css  -->
        <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>assets/vendor/css/custom1.css" rel="stylesheet" type="text/css" media="screen">
        <!-- font awesome for icons -->
        <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendor/css/atoz.css" rel="stylesheet" type="text/css">
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
        <!--owl carousel css-->
        <link href="<?php echo base_url(); ?>assets/vendor/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>assets/vendor/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="<?php echo base_url(); ?>assets/vendor/css/yamm.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/vendor/css/select.css" rel="stylesheet" type="text/css">
        <!--Revolution slider css-->
        <link href="<?php echo base_url(); ?>assets/vendor/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>assets/vendor/css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>assets/vendor/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
       <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/vendor/img/favicon.ico">
	      <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/js/jquery-migrate.min.js"></script>
         <!--on scroll animation-->
        <script src="<?php echo base_url(); ?>assets/vendor/js/wow.min.js" type="text/javascript"></script> 
        <!--bootstrap js plugin-->

        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
		<script src="<?php echo base_url(); ?>assets/vendor/js/bootstrapValidator.min.js"></script>	
    </head>
    <body>
        <div class="top-bar hidden-xs bg-dark">
            <div class="container ">
                <div class=" row border_bootom">
                    <div class="col-sm-6 hidden-xs">
                        <span class="top-welcome">Welcome to GRF Publishers</span>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <ul class="small_menu">
                        <li><a ><i class="fa fa-volume-control-phone font-17" aria-hidden="true"></i> +61 385184040</a></li>                 
                        <li><a ><i class="fa fa-envelope font-17" aria-hidden="true"></i> &nbsp; Contact@grfpublishers.org</a></li>                 
                      
                       </ul>
                        <div class="top-social hidden-xs">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="header-logo-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2 padding_left_0" style="width:12%;height:auto;">
                        <a href="<?php echo base_url(); ?>" class="header-logo">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="LOGO">
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-8 hidden-xs ">
                        <div class="contact-info-blocks  hidden-xs ">
                           <marquee id='scroll_news' style="padding-top:50px" >
										<div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();"><h4 class="text-primary"><?php echo isset($scroll_data['scroll_content'])?$scroll_data['scroll_content']:''; ?> </h4></div>
									</marquee>
                          
                        </div>
                    </div>
                   <!--  <div class="col-md-3 col-sm-5">
                        <div class="top-search">
                            <form role="form" class="search-widget">
                                <input type="text" class="form-control" placeholder="Find property">
                                <button type="submit" class="btn btn-submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>  
                    </div> -->
                </div>
            </div>
        </div>
        
        
        <!-- Static navbar -->
        <nav class="navbar navbar-inverse navbar-static-top sticky yamm">
            <div class="bg_color">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>" class="<?php if($c_url==base_url()){ echo "current"; } ?>">Home</a></li> 
                        <li><a href="<?php echo base_url('open-access'); ?>" class="<?php if($c_url==base_url('open-access')){ echo "current"; } ?>">Open Access</a></li> 
                        <li><a href="<?php echo base_url('peer-review-process'); ?>" class="<?php if($c_url==base_url('peer-review-process')){ echo "current"; } ?>">Peer Review Process </a></li> 
                        <li><a href="<?php echo base_url('journals'); ?>" class="<?php if($c_url==base_url('journals')){ echo "current"; } ?>">Journals</a></li>  
						<li class="dropdown <?php if($c_url==base_url('editors') || $c_url==base_url('author-guidelines') || $c_url==base_url('manuscript-guidelines') || $c_url==base_url('membership')){ echo "current"; } ?>">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Guidelines <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="<?php echo base_url('editors'); ?>">Editors</a></li>
							<li><a href="<?php echo base_url('author-guidelines'); ?>">Authors</a></li>
							<li><a href="<?php echo base_url('manuscript-guidelines'); ?>">Manuscript Guidelines</a></li>
							<li><a href="<?php echo base_url('membership'); ?>">Membership</a></li>
							
						  </ul>
						</li>
                       
                        <li ><a href="<?php echo base_url('conference'); ?>" class="<?php if($c_url==base_url('conference')){ echo "current"; } ?>">Conferences</a></li>
						<li ><a href="<?php echo base_url('video-article'); ?>" class="<?php if($c_url==base_url('video-article')){ echo "current"; } ?>">Video Articles</a></li>
						<li ><a href="<?php echo base_url('manuscript'); ?>" class="<?php if($c_url==base_url('manuscript')){ echo "current"; } ?>">Submit Manuscript</a></li>
						<li ><a href="<?php echo base_url('contactus'); ?>" class="<?php if($c_url==base_url('contactus')){ echo "current"; } ?>"> Contact Us</a></li>


                    </ul>
                    
                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </nav><!--navigation end-->
        <!--rev slider start-->
		<style>
		/* notifications */
.bg-succ{
	background:#449d44 !important;
}
.bg-del{
	background:#d9534f !important;
}
.bg-warn{
	background:#f0ad4e !important;
}
	.ico_bac{
		background:#fff;
		border-radius:50%;
		padding:8px;
	}
	.alert_msg1 {
		
		position:fixed;
		bottom:80px;
		color:#fff;
		padding:10px;
		left:50%;
		z-index:1200;
		-nimation:signup-response 0.5s 1;
    -webkit-animation:signup-response 0.5s 1;
    animation-fill-mode: forwards;

    animation-delay:5s;
    -webkit-animation-delay:5s; /* Safari and Chrome */
    -webkit-animation-fill-mode: forwards;
	webkit-box-shadow: -2px 6px 39px -8px rgba(0,0,0,0.75);
-moz-box-shadow: -2px 6px 39px -8px rgba(0,0,0,0.75);
box-shadow: -2px 6px 39px -8px rgba(0,0,0,0.75);

	}
	@keyframes signup-response {
    from {opacity :1;}
    to {opacity :0;}
}

@-webkit-keyframes signup-response{
    from {opacity :1;}
    to {opacity :0;}
}
		</style>
		
		<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>

<!-- chating  purpose--->
<div class="container-fluid" style="position: fixed;bottom: 0%;right: 60px;z-index:2000">
    <div class="row">
        <div class="pull-right col-md-3">
            <div class="chat-div" style="z-index:2000;">
                <div>
                    <div style="display:none;" class="chat-box" >

                        <div class="direct-chat box  direct-chat-primary" style="z-index: 999;padding:0px; ">
                        <div  >
                            <div class=" with-border bg-primary" style="padding:8px 10px;border-radius:5px 5px 0px 0px;">
                                <strong class="box-title">Leave a message</strong>
                                <a style="position:absolute;right:15px;top:5px;color:#fff;border:none;font-size:20px"> <i class="fa fa-times-circle pull-right btn-chat-box" aria-hidden="true"></i></a>
                            </div>
                            <div style="border:1px solid #337ab7;background:#f9f9f9;">
                            <div >
							<div class="text-center img-chat" >
								<img src="<?php echo base_url(); ?>assets/vendor/img/chat_img_1.jpg">
							</div>

                            </div>
							<div style="padding:0px 10px">
							<span class="">There are no agents available right now to take your call. Please leave a message and we will reply by email.</span>

                            </div>
                            <div class="box-body">
								<form id="add_message" name="add_message" action="<?php echo base_url('home/sendmessage'); ?>" method="POST">
                                <div class="direct-chat-messages">

                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control mb-0 pb-0" id="uname" name="uname" placeholder="Enter Your Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control pb-0" id="uemail" name="uemail" placeholder="Enter Email Id" required>
                                    </div>
									<div class="form-group">
                                        <textarea type="email" class="form-control pb-0" id="msg" name="msg" placeholder="Enter Message" required></textarea>
                                    </div>
									<div class="form-group">
                                       <div class="col-lg-6 ">
											<button type="submit" class="btn btn-primary btn-lg" name="signup" value="Sign up">Submit</button>
										</div>
                                    </div>
							</div>
							</form>
						</div>


                        </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    <div class="btn-chat pull-right">
        <span class="btn_blue_chat btn-chat-box btn btn-rounded open-chat-box bg-dark"><i class="fa fa-comments"></i> Leave a message</span>
    </div>

</div>

		<script>
		  $(document).ready(function() {
        $(".btn-chat-box").click(function() {
            $(".chat-box").toggle();
        });
    });
		</script>