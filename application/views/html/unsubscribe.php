		<br>
		<br>
       <div class="contact-us">
       <div class="container">
          <div class="contact-form">
           <div class="row">
               
               
			   <div class="col-sm-6 col-sm-offset-3">
<h3 class="">Unsubscribe  
						<span class="text-success">User</span> 
					</h3>			   
              <!-- action="contact-form-mail.php"-->                 
                   <form id="defaultForm" method="post" class="" action="<?php echo base_url('unsubscribe/post'); ?>">
					
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
						
					
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Email Id</label>
								<div class="">
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter email id" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Reason</label>
								<div class="">
									<textarea class="form-control" rows="5" id="reason" name="reason" id="comment"></textarea>
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
						
					
						  <div class="form-group">
                            <div class="col-lg-6 ">
                                <button type="submit" class="btn btn-primary btn-lg" name="signup" value="Sign up">Submit</button>
								
                                
                            </div>
                        </div>
						
                    </form>
    
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix">&nbsp;</div>
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
            },reason: {
                 validators: {
					notEmpty: {
						message: 'Reason is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Reason wont allow <> [] = % '
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
		
