<!DOCTYPE html>
<html lang="en">

<head>
    <?php

      include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
   $param = $_GET['idno'];
    ?> 
  

</head>

<body>

        <?php include 'includes/nav.php';?> 
    <!-- Page Content -->


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
      <?php
      $sql = "SELECT classcode,courseno, description, days, class.time, room
from student natural join enrollment natural join enrollmentdetails join class using(classcode)
    join course using (courseno) where idno = ".$_SESSION["idno"];
 
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                
              echo '<tr>
                      <td>' . $row["classcode"] . '</td>
                      <td>' . $row["courseno"] . '</td>
                      <td>' . $row["description"] . '</td>
                      <td>' . $row["time"] . '</td>
                      <td>' . $row["days"] . '</td>
                      <td>' . $row["room"] . '</td>

                  </tr>';
                }
              }
              ?>

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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
     <!-- Bootstrap Core JavaScript -->
</body>



</html>
