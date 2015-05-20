<!DOCTYPE html>
<html lang="en">

<head>
    <?php
      include 'includes/dbconnection.php';
      include 'includes/headerelements.php';
      include 'includes/header.php'; 
      if(!isset($_SESSION["idno"])){
      header('Location: index.php?loggedout=true');} 
      $sql = "SELECT * FROM student where idno = ".$_SESSION["idno"];
      $rs = $conn->query($sql);
      $resultRow = $rs->fetch_assoc() 
    ?>

    <script>
      var year = '<?php echo $resultRow['year'] ?>';
      var maxUnits = '<?php echo $resultRow['maxunits'] ?>'; 
    </script>

    <title>Pre Enroll</title>
</head>

<body ondblclick = "displayUnits()">

  <?php include 'includes/nav.php';?> 
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
    ...
    <li role="presentation" class="dropdown-header">Dropdown header</li>
    ...
  </ul>
  
  <br>

    <div class="col-md-12">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#subjectsModal">
        Choose Block Schedule
      </button>
      <br></br>
      <!-- Modal -->
      <div class="modal fade" id="subjectsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Block Schedule</h4>
            </div>
            <div class="modal-body">
              <div class="well">
                <table id="blkTbl" class="tables_ui table table-hover"  onmouseover="displayUnits(event)">
                  <tbody id="blk" class="t_sortable">

                    <tr>
                      <th>Class Code</th>
                      <th>Course Number</th>
                      <th>Descriptive Title</th>
                      <th>Time</th>
                      <th>Days</th>
                      <th>Room</th>
                      <th>Units</th>     
                    </tr>

                    <tr>
                      <td>9570</td>
                      <td>IT 324L</td>
                      <td>Web Systems and Technologies</td>
                      <td>1:00-2:30</td>
                      <td>WS</td>
                      <td>S326</td>
                      <td>1</td>
                    </tr>


                    <tr>
                      <td>9569</td>
                      <td>IT 324</td>
                      <td>Web Systems and Technologies</td>
                      <td>10:30-11:30</td>
                      <td>MTH</td>
                      <td>S423</td>
                      <td>2</td>
                    </tr>


                    <tr>
                      <td>9571</td>
                      <td>IT 323L</td>
                      <td>Integrative Programming</td>
                      <td>1:00-2:30</td>
                      <td>MTH</td>
                      <td>S326</td>
                      <td>1</td>
                    </tr>


                    <tr>
                      <td>9572</td>
                      <td>IT 323</td>
                      <td>Integrative Programming</td>
                      <td>1:00-2:00</td>
                      <td>TF</td>
                      <td>S423</td>
                      <td>2</td>
                    </tr>


                    <tr>
                      <td>9558</td>
                      <td>IT 423</td>
                      <td>Information Systems Planning </td>
                      <td>9:30-10:30</td>
                      <td>MWF</td>
                      <td>S526</td>
                      <td>3</td>
                    </tr>



                    <tr>
                      <td>9523</td>
                      <td>IT 002</td>
                      <td>Information Technology Certification and Review</td>
                      <td>11:30-12:30</td>
                      <td>MWF</td>
                      <td>S425</td>
                      <td>3</td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Previous</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Next</button>
              <button id="chooseBlock" onclick="selectBlock()" type="button" class="btn btn-primary">Choose Block</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"> Available Subjects</h3>
      </div>

      <table class="tables_ui table table-hover" id="t_draggable1" data-toggle="bootgrid" data-ajax="true" data-url="subjectserver.php">
        <tbody class="t_sortable">
          <thead>
            <tr>
              <th data-column-id="classcode" data-identifier="true">Classcode</th>
              <th data-column-id="courseno">Course No.</th>
              <th data-column-id="description">Descriptive Title</th>
              <th data-column-id="time">Time</th>
              <th data-column-id="days">Days</th>
              <th data-column-id="room">Room</th>
              <th data-column-id="units">Units</th>
            </tr>
          </thead>  
        </tbody>
      </table>

      <!-- Drag and Drop -->
      <script src="jq/jquery-2.1.4.min.js"></script>
      <script src="jq/jquery-ui.min.js"></script>

      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.bootgrid.min.js"></script>

      <script language="javascript">
        $("#grid-data").bootgrid({caseSensitive:false});
      </script>
    </div>
  </div>

  <div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title"> Added Subjects</h3>
      </div>
      <div class="panel-body">
        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#t_draggable2" placeholder="Filter Subjects" />
      </div>
      
      <table class="tables_ui table table-hover" id="t_draggable2" onmouseover="displayUnits(event)">
        <tbody id="addSubj" class="t_sortable">
          <tr>
            <th>Class Code</th>
            <th>Course Number</th>
            <th>Descriptive Title</th>
            <th>Time</th>
            <th>Days</th>
            <th>Room</th>
            <th>Units</th>
          </tr>
        </tbody>
      </table>
    </div>
    
    <p id="noOfUnits">Total Number of Units: <span id="units"></span></p>
    <div class="col-md-10"> </div>
    <form id="eform" onsubmit="return isValidForm()" action="payments.php" method="post">
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary" onclick="validateUnits()">Pre-Enroll</button>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="row">
      <div class="col-lg-12">
        <p> WEBTEK 2015</p>
      </div>
    </div>
  </footer>


  <!-- script.js -->
  <script src="js/script.js"></script>

</body>

</html>
