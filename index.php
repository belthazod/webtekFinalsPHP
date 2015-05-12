<!DOCTYPE html>
<html lang="en">

<head>


   <head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 

                        if(isset($_GET["loggedout"]) && $_GET["loggedout"]==true){
                        echo ' <div class="col-sm-6 col-md-6">
										<div class="alert alert-info">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<span class="glyphicon glyphicon-info-sign"></span> <strong>Message</strong>
											<hr class="message-inner-separator">
												<p>You need to login first.</p>
										</div>
								 </div>';
                        }
                        if(isset($_GET["failed"]) && $_GET["failed"]==true){
                        echo ' <div class="col-sm-6 col-md-6">
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
											×</button>
										<span class="glyphicon glyphicon-hand-right"></span> <strong>Warning!</strong>
										<hr class="message-inner-separator">
										<p>Please re-enter<br>
										   The password or username you entered is incorrect. Please try again (make sure your caps lock is off).</p>
									</div>
								</div>';
                        }
                         ?>
<link href="css/bootstraplogin.css" rel="stylesheet">

    <title>Pre Enroll</title>

</head>


</head>

<body>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p href="home.html" class="form-title">
                    Sign In</p>
                <form class="login" action="includes/login.php" method="POST">
             
                <input type="text" placeholder="ID Number" name="idno" />
                <input type="password" placeholder="Password" name = "password"/>
                <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery -->
    <script>
 $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});

    </script>

</body>

</html>
