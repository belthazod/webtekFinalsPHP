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

<br>
     
      
        <!-- /.row -->
<div class="container">
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
      $sql = "SELECT  classcode, courseno, description, class.time, days,room, units FROM enrollmentdetails join class using (classcode) join course using (courseno) join enrollment using (enrolid) where idno =".$_SESSION["idno"];
 
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

       
      </tbody>
    </table>
</div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
     <!-- Bootstrap Core JavaScript -->
</body>



</html>
