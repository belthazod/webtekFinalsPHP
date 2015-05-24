<!DOCTYPE html>
<html lang="en">

<head>
    <?php

     include 'includes/dbconnection.php';
     include 'includes/header.php';
include 'includes/headerelements.php'; 
     ?>


</head>
      <?php include 'includes/nav.php';?> 
<div class="container">
<div class="row">
<div class="col-sm-12">

<body>
	<h1>Change Password</h1>
	</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
	<p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
	<form method="post" id="passwordForm" action="includes/changepassword.php">
	<?php 
		if(isset($_GET["success"]) && $_GET["success"]==true){
		echo '<div class="alert alert-success" role="alert"><strong>Success!</strong> Your password has been changed.</div>';
		}
		if(isset($_GET["failed"]) && $_GET["failed"]==true){
                        echo ' <div class="col-sm-6 col-md-6">
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
											×</button>
										<span class="glyphicon glyphicon-hand-right"></span> <strong>Warning!</strong>
										<hr class="message-inner-separator">
										
										   Your password confirmation did not match.</p>
									</div>
								</div>';
                        }
       
	  ?>
		
	<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="Old Password" autocomplete="off" required>
		<br> 
	<input type="password" class="input-lg form-control" name="password2" id="password1" placeholder="New Password" autocomplete="off" required>

<div class="row">
<div class="col-sm-6">
 <br>

</div>

<div class="col-sm-6">

</div>

</div>
<input type="password" class="input-lg form-control" name="password3" id="password2" placeholder="Repeat New Password" autocomplete="off">
<div class="row">
<div class="col-sm-12">
</div>
</div>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->


</body>
</html>