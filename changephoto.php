<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    	include 'includes/dbconnection.php';
    	include 'includes/header.php';
		include 'includes/headerelements.php'; 
    ?>

</head>

<body>   
    <?php include 'includes/nav.php';?> 

	<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				<h1>Change Photo</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<p class="text-center">Select image to upload</p>
				<form action="upload.php" method="post" enctype="multipart/form-data">
    				<input type="file" name="fileToUpload" id="fileToUpload">
    				<br />
    				<input type="submit" value="Upload Image" name="submit">
				</form>
			</div><!--/col-sm-6-->
		</div><!--/row-->

	</div>
</body>
</html>