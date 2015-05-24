<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
     ?>


</head>

<body>

      <?php include 'includes/nav.php';?> 
       <div class="row">
    <div class="col-md-12">
      <div class="container">
      <p> Your payment has been successfully acknowledged. You are <strong> Officially Enrolled</strong></p>
      </div>
 <h4><a data-toggle="modal" data-target="#myModal">Schedule</a></h4>
        
                            <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Enrolled Schedule</h4>
                                  </div>
                                  <div class="modal-body">
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
      $sql = "SELECT count(classcode) as count, classcode,courseno, description, days, class.time, room
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

      </tbody>
    </table>
                                  </div>
                            </div>
                        </div>
                    </div> 
                    </div>
                    </div>
          <!-- Text input-->
</body>