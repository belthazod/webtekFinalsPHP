<!DOCTYPE html>
<html lang="en">
<?php
$param = $_GET['idno'];
?>
<head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
     ?>


</head>

<body>

      <?php include 'includes/nav.php';?> 
      <p> Your payment has been successfully acknowledged. You are <strong> Officially Enrolled</strong></p>
      <form action=<?php echo '"schedule.php?idno="' . $_SESSION['idno'] . '"'?> method="post">
	<input type ="submit" value="View Schedule" class="btn btn-default">
</body>