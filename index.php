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
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
										×</button>
								   <span class="glyphicon glyphicon-ok"></span>
									<hr class="message-inner-separator">
									<p>
									 You are not logged in..</p>
								</div>
							</div>';
                        }
                        if(isset($_GET["failed"]) && $_GET["failed"]==true){
                        echo ' <div class="col-sm-6 col-md-6">
								<div class="alert alert-info">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
										×</button>
								   <span class="glyphicon glyphicon-ok"></span> <strong>Message</strong>
									<hr class="message-inner-separator">
									<p>
										Your username or password is incorrect or<br>
										you have not yet logged in. Try again.</p>
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
        <div class="col-md-offset-4 col-md-4">
            
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
                                    <p class = "remember">Remember Me</p>
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
