<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 margin30">
                     <h3 class="">FOLLOW US</h3>
                        <ul class="list-unstyled">
                            
                            <li><a href="#" target="_blank">Face Book</a></li>
                            <li><a href="#" target="_blank">Twitter</a></li>
                            <li><a href="#" target="_blank">Google +</a></li>
                            <li><a href="#" target="_blank">Linkedin</a></li>
                            <li><a href="#" target="_blank">Youtube</a></li>
                            
                        </ul>
                    </div>
                   
                    <div class="col-md-2 col-sm-6 margin30">
                        <h3>QUICK LINKS</h3>
                        <ul class="list-unstyled">
                             <li><a href="<?php echo base_url('journals'); ?>">Journals</a></li>
                             <li><a href="<?php echo base_url('contactus'); ?>">Contact Us</a></li>
                             <li><a href="<?php echo base_url('conference'); ?>">Conferences</a></li>
                             <li><a href="<?php echo base_url('video-article'); ?>">Video Article</a></li>
                             <li><a href="<?php echo base_url('menuscript'); ?>">Submit Manuscript</a></li>
                           
                        </ul>
                    </div> 
					
					<div class="col-md-3 col-sm-6 margin30">
                        <h3>Contact Address	</h3>
						<ul class="list-unstyled">
						<li><a href="#">GRF Publishers Level 13/114 William Street, Melbourne VIC 3000 Australia</a></li>
						</ul>
                      
                    </div>
					<div class="col-md-3 col-sm-6 margin30">
                        <h3>Contact Information	</h3>
                        <ul class="list-unstyled">
                             <li><a ><i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp; +61 385184040</a></li>
                             <!--<li><a ><i class="fa fa-fax" aria-hidden="true"></i>&nbsp; **********</a></li>-->
                             <li><a ><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Contact@grfpublishers.org</a></li>
                             <li><a >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Support@grfpublishers.org</a></li>
							   <li><a ><i class="fa fa-globe" aria-hidden="true"></i></i>&nbsp; www.grfpublishers.com</a></li>
                           
                           
                        </ul>
                    </div> 
					<div class="col-md-2 col-sm-6 margin30">
                        <h3>Open Access Licence</h3>
                        <ul class="list-unstyled">
                           <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license"  target="_blank" style="color:#bbb ;" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
                        </ul>
                    </div> 
                </div>
            </div>
        </footer><!--footer-->
        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
       <!--  <div class="copyright">
            <div class="container text-center">
                <span>&copy; Copyright 2015. All right reserved. Assan real estate</span>
            </div>
        </div> -->
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
     	
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/jquery.sticky.js"></script>
          <!--flex slider plugin-->
        <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--owl carousel slider-->
        <script src="<?php echo base_url(); ?>assets/vendor/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/js/classie.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/js/selectFx.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="<?php echo base_url(); ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url(); ?>assets/vendor/js/tweetie.min.js" type="text/javascript"></script>
       
        <!--customizable plugin edit according to your needs-->
        <script src="<?php echo base_url(); ?>assets/vendor/js/real-estate-custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
        <script type="<?php echo base_url(); ?>assets/vendor/text/javascript" src="js/banner.js"></script>
		<script type="<?php echo base_url(); ?>assets/vendor/text/javascript" src="js/hover-effect.js"></script>

        <script type="text/javascript">
           /* $(function(){
      $(".dropdown").hover(            
              function() {
                  $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              },
              function() {
                  $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              });
      });*/

        $(function(){
      $(".drop").hover(            
              function() {
                
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              },
              function() {
                 
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              });
      });


           
    $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
       $('.navbar-inverse').css('background','#0688de');
     }
    else
     {
      $('.navbar-inverse').css('background','none');
     }
 });
        </script>

           <script type="text/javascript">
           $(document).ready(function() {
 
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
    autoPlay: 2000,
     loop: true,
      items : 6, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false,
      stopOnHover : true,
      
       dots: false,
       touchDrag: true
   // itemsMobile disabled - inherit from itemsTablet option
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })
 
});
        </script>

        <script type="text/javascript">
            
            $(".box_hover").each(function(){

        $(this).hover(function(){

                $(this).find(".green_icon").css({"display":"none","z-index":"5"});
                $(this).find(".white_icon").css({"display":"block","z-index":"5"});
                $(this).find("h4").css({"color":"#000"});
               
        },
        function(){

                $(this).find(".green_icon").css({"display":"block","z-index":"5"});
                $(this).find(".white_icon").css({"display":"none","z-index":"5"});
                $(this).find("h4").css({"color":"#6496b9"});
                
        });



});
        </script>

         <script type="text/javascript">jssor_1_slider_init();</script>

         <script type="text/javascript">
             
      
$(document).ready(function(){
    function loop(){
        $('.svg_img').animate({'width':'235px'},1000).animate({'width':'230px'},1000);
         loop();

    }
    
     loop();
 
});
         </script>


         <script type="text/javascript">
             // ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
         </script>

    </body>

</html>
