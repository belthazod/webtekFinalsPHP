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
      <p> Your payment has been successfully acknowledged. You are <strong> Officially Enrolled</strong></p>
       <label>Schedule Due date</label><p id='due'></p>
 
    <h4><button onclick="myfunction()" type="button" class="btn btn-default"><a data-toggle="modal" data-target="#myModal">Schedule</a></button></h4>
        
                            <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Enrolled Schedule</h4>
                                  </div>
                                  <div class="modal-body">
                                    <a href="schedule.php"></a>
                                  </div>
                            </div>
                        </div>
                    </div> 
          <!-- Text input-->
</body>