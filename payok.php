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
       
        <div class="container">
    <div class="col-md-12">

      <br>

      <div class="col-md-9">

      <div class="alert alert-success align">
                                                    
                                                     <p> Your payment has been successfully acknowledged. You are <strong> Officially Enrolled</strong></p>
                                                </div>
      
     

      </div>

    

    <div class="col-md-3">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg align center" data-toggle="modal" data-target="#myModal">
  View Schedule
</button>

 </div>
 </div>
 
        
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
                        </div>
                    </div> 
                    </div>
                    </div>
          <!-- Text input-->

           <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

     
</body>

</html>