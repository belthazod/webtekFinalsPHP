<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<script src="js/pf.js"></script>
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
	<form method="post" id="passwordForm">

	<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="Old Password" autocomplete="off">
		<br> 
	<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">

<div class="row">
<div class="col-sm-6">
<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>  <br>

</div>

<div class="col-sm-6">

</div>

</div>
<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat New Password" autocomplete="off">
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