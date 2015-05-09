<!DOCTYPE html>
<html lang="en">

<head>


   <head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
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
