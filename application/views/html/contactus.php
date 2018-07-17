		<br>
		<br>
       <div class="contact-us">
       <div class="container">
          <div class="contact-form">
           <div class="row">
               
               <div class="col-sm-5">
                   <div class="row col1">
                       <div class="col-xs-3">
                           <i class="fa fa-map-marker" style="font-size:16px;"></i>   Address
                       </div>
                       <div class="col-xs-9">
                       <strong>GRF Publishers</strong><br>
                           Level 13/114 William Street,<br> Melbourne VIC 3000 <br> Australia
                       </div>
                   </div>
                   
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-phone"></i>   Phone
                        </div>
                        <div class="col-sm-9">
                            +61 385184040
                        </div>
                    </div>
                    
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-envelope"></i>   Email
                        </div>
                        <div class="col-sm-9">
                        <a href="mailto:Contact@grfpublishers.org">Contact@grfpublishers.org</a> 
                        <a href="mailto:Support@grfpublishers.org">Support@grfpublishers.org</a> 
                        </div>
                    </div><br>
                    
                    
               
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.876508295534!2d144.9566948149695!3d-37.8163614419644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d9c100b80f5%3A0x52fa1b06d3e997b1!2sGRF+PUBLISHERS+PTY+LTD!5e0!3m2!1sen!2sin!4v1528723617161" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
               </div>
			   <div class="col-sm-7"> 
              <!-- action="contact-form-mail.php"-->                 
                   <form id="defaultForm" method="post" class="" action="<?php echo base_url('contactus/post'); ?>">
					
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label"> Enter First Name</label>
								<div class="">
									<input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label"> Enter Last Name</label>
								<div class="">
									<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name" />
								</div>
							</div>
                        </div>
						
					
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Email Id</label>
								<div class="">
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter email id" />
								</div>
							</div>
                        </div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Phone Number</label>
								<div class="">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" />
								</div>
							</div>
                        </div>
					
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Your Message</label>
								<div class="">
									<textarea class="form-control" rows="5" id="message" name="message" id="comment"></textarea>
								</div>
							</div>
                        </div>
					
						<div class="clearfix">&nbsp;</div>
						<div class="col-md-6">
						 <div class="form-group">
                            <label class="col-lg-6 control-label" id="captchaOperation"></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="captcha" />
                            </div>
                        </div>
                        </div>
						
					
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-6 ">
                                <button type="submit" class="btn btn-primary btn-lg" name="signup" value="Sign up">Submit</button>
								
                                
                            </div>
                        </div>
						
                    </form>
    
               </div>
           </div>
           
          </div>
       </div>
   </div>
         <script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//
        fields: {
            firstName: {
               validators: {
					notEmpty: {
						message: 'First Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'First Name can only consist of alphanumeric, space and dot'
					}
				}
            },
            lastName: {
                validators: {
					notEmpty: {
						message: 'Last Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Last Name can only consist of alphanumeric, space and dot'
					}
				}
            },
            
            email: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },phone: {
                 validators: {
					notEmpty: {
						message: 'Phone  Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Phone  Number must be 10 to 14 digits'
					}
				
				}
            },message: {
                 validators: {
					notEmpty: {
						message: 'Message is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Message wont allow <> [] = % '
					}
				
				}
            },
            
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
          
        </div>
		
