<!DOCTYPE html>
<html lang="en">

<head>
    <?php

     include 'includes/dbconnection.php';
     include 'includes/header.php';
   include 'includes/headerelements.php'; 
   $param = $_GET['idno'];
     
   $sql = "SELECT classcode,courseno, description, days, time, room
from student natural join enrollment natural join enrollmentdetails join class using(classcode)
    join course using (courseno)  FROM student where idno = ".$_SESSION["idno"];

   $rs = $conn->query($sql);
   $resultRow = $rs->fetch_assoc() 
     ?>


</head>

<body>

        <?php include 'includes/nav.php';?> 
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
      
        <!-- /.row -->
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>Class Code</th>
          <th>Course Number</th>
          <th>Descriptive Title</th>
          <th>Time and Day</th>
		  <th>Room</th>
		  <th>Units</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
        <!--<tr>
          <td>9570</td>
          <td>IT 324L</td>
          <td>Web Systems and Technologies</td>
          <td>1:00-2:30 WS</td>
		  <td>S326</td>
		  <td>1</td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>9569</td>
          <td>IT 324</td>
          <td>Web Systems and Technologies</td>
          <td>10:30-11:30</td>
		  <td>S423</td>
		  <td>2</td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>9571</td>
          <td>IT 323L</td>
          <td>Integrative Programming</td>
          <td>1:00-2:30 MTH</td>
		  <td>S326</td>
		  <td>1</td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>9572</td>
          <td>IT 323</td>
          <td>Integrative Programming</td>
          <td>1:00-2:00 TF</td>
		  <td>S423</td>
		  <td>2</td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>9558</td>
          <td>IT 423</td>
          <td>Information Systems Planning </td>
          <td>9:30-10:30</td>
		  <td>S425</td>
		  <td>3</td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr>
          <td>9560</td>
          <td>IT 312L</td>
          <td>Programming Applications</td>
          <td>10:30-12:00 WS</td>
		  <td>S326</td>
		  <td>1</td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>-->
      </tbody>
    </table>
</div>