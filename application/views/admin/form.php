<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div class="content-wrapper">
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Student</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="defaultForm" method="post" class="" action="form.php">
						<div class="col-md-offset-3 col-md-6 ">
						<h3 class="box-title"> <i class="fa fa-info" aria-hidden="true"></i>&nbsp;Personal Details</h3>
					
						<div class="form-group">
                            <label class=" control-label">Name of the Student</label>
                            <div class="">
                                <input type="text" class="form-control" name="username" placeholder="Name of the Student" />
                            </div>
                        </div>
						<div class="form-group">
						<label>Date of Birth</label>

						<div class="input-group date">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						  <input type="text" class="form-control pull-right" id="datepicker" placeholder="Date of Birth" />
						</div>
						
					  </div>
						
						<div class="form-group ">
							<label class=" control-label">Gender</label>
							<div class="row">
								<div class="radio col-md-2">
									<label>
										<input type="radio" name="gender" value="male" data-bv-field="gender"> Male
									</label>
								</div>
								<div class="radio col-md-2" style="margin-top:10px">
									<label>
										<input type="radio" name="gender" value="female" data-bv-field="gender"> Female
									</label>
								</div>
								<i class="form-control-feedback" data-bv-icon-for="gender" style="display: none;"></i>
							<small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">The gender is required</small>
							</div>
							
						</div>
						<div class="form-group">
                            <label class=" control-label">Email address</label>
                            <div class="">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email address" />
                            </div>
                        </div>
						<div class="form-group">
                            <label class=" control-label">Current Address</label>
                            <div class="">
                                <input type="text" class="form-control" name="" placeholder="Enter Current Address" />
                            </div>
                        </div>
						
							<div class="row">
								<div class=" col-md-4">
									<div class="form-group">
										<div class="">
											<input type="text" class="form-control" name="email" placeholder="Enter City Name" />
										</div>
									</div>
								</div>
								<div class=" col-md-4">
									<div class="form-group">
										<div class="">
											<select class="form-control">
												<option>Select Country</option>
												<option> Country 1</option>
												<option> Country 2</option>
												<option> Country 3 </option>
												<option> Country 4 </option>
												<option> Country 5</option>
											</select>
										</div>
									</div>
								</div>
								<div class=" col-md-4">
									<div class="form-group">
										<div class="">
											<input type="text" class="form-control" name="email" placeholder="Enter Pincode" />
										</div>
									</div>
								</div>
								
								
							</div>

								<div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="languages[]" value="english" data-bv-field="languages[]"> Same the above
                                    </label>
                                </div>
								<div class="form-group">
                            <label class=" control-label">Permanent Address</label>
                            <div class="">
                                <input type="text" class="form-control" name="" placeholder="Enter Current Address" />
                            </div>
                        </div>
						
							<div class="row">
								<div class=" col-md-4">
									<div class="form-group">
										<div class="">
											<input type="text" class="form-control" name="email" placeholder="Enter City Name" />
										</div>
									</div>
								</div>
								<div class=" col-md-4">
									<div class="form-group">
										<div class="">
											<select class="form-control">
												<option>Select Country</option>
												<option> Country 1</option>
												<option> Country 2</option>
												<option> Country 3 </option>
												<option> Country 4 </option>
												<option> Country 5</option>
											</select>
										</div>
									</div>
								</div>
								<div class=" col-md-4">
									<div class="form-group">
										<div class="">
											<input type="text" class="form-control" name="email" placeholder="Enter Pincode" />
										</div>
									</div>
								</div>
							</div>
						<div class="form-group">
                            <label class=" control-label">Blood Group (Optional)</label>
                            <div class="">
								<select class="form-control" id="Bloodgroup" name="s_bloodgrp">
									<option value="">Select Blood Group</option>
									<option value="O+">O +</option>
									<option value="O-">O -</option>
									<option value="A+">A +</option>
									<option value="A-">A -</option>
									<option value="B+">B +</option>
									<option value="B-">B -</option>
									<option value="AB+">AB +</option>
									<option value="AB-">AB -</option>
								</select>
                            </div>
                        </div>
						<div class="form-group">
                            <label class=" control-label">User Name</label>
                            <div class="">
                                <input type="password" class="form-control" name="confirmPassword" placeholder="Enter User Name " />
                            </div>
                        </div>
						<div class="row">
								<div class=" col-md-6">
									<div class="form-group">
										<div class="">
											<input type="password" class="form-control" name="password" placeholder="Enter password" />
										</div>
									</div>
								</div>
								<div class=" col-md-6">
									<div class="form-group">
										<div class="">
											<input type="password" class="form-control" name="password" placeholder=" confirm password" />
										</div>
									</div>
								</div>
								
								
								
							</div>
						<div class="form-group">
                            <label class=" control-label">Profile Image</label>
							<input type="file">
                        </div> 
						 <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add Student</button>
								<a href="student.php" type="submit" class="btn btn-warning" >Back</a>
                                
                            </div>
                        </div>
                        </div>
					<!--school details-->
						
						
						 
						
                    </form>
					<div class="clearfix">&nbsp;</div>
          </div>
          </div>
          <!-- /.box -->

         

        </div>
      
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section> 
</div>

  <script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            lastName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    remote: {
                        type: 'POST',
                        url: 'remote.php',
                        message: 'The username is not available'
                    },
                    different: {
                        field: 'password,confirmPassword',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            birthday: {
                validators: {
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The birthday is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            'languages[]': {
                validators: {
                    notEmpty: {
                        message: 'Please specify at least one language you can speak'
                    }
                }
            },
            'programs[]': {
                validators: {
                    choice: {
                        min: 2,
                        max: 4,
                        message: 'Please choose 2 - 4 programming languages you are good at'
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

<?php include("footer.php"); ?>