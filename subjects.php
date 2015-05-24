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
    <style>
      .hidden{
        display:none;
      }
    </style>
    <title>Pre Enroll</title>
</head>

<body ondblclick = "displayUnits()">

  <?php include 'includes/nav.php';?> 


<div class="container">
  <br>

    <div class="col-md-9">
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
                  <thead id="blkhead" class="t_sortable">

                    <tr>
                      <th>Class Code</th>
                      <th>Course Number</th>
                      <th>Descriptive Title</th>
                      <th>Time</th>
                      <th>Days</th>
                      <th>Room</th>
                      <th>Units</th>     
                    </tr>
                </thead>
<?php
$numberOfBlocks = 0;
 $sql = "SELECT Distinct(blockno) FROM class Where year = ". $resultRow['year'] ." Order by 1 Desc Limit 1"; 
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $numberOfBlocks = $row["blockno"];
              }
        }
for($block = 1;  $block <= $numberOfBlocks ; $block++){
  echo '<tbody id="blk">';
 $sql = "SELECT classcode, courseno, description, time, days,room, units from class natural join course WHERE blockno = ".$block." AND year = ". $resultRow['year'] ; 
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
                      <td>' . $row["units"] . '</td>
                  </tr>';
                }
              }
        echo '</tbody>';
        }

?>
                   <!-- <tr>
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
                    </tr>-->
                  
                <tfoot class="center-text" id='currentBlock'>
                
                </tfoot>
                </table>
              </div>
            </div>

     
            <div class="modal-footer">
              <button type="button" class="btn btn-default" onclick ="previousBlock()" >Previous</button>
              <button type="button" class="btn btn-default" onclick="nextBlock()" >Next</button>
              <button id="chooseBlock" onclick="selectBlock()" type="button" class="btn btn-primary" data-dismiss="modal">Choose Block</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="col-md-12 ">
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
              <th style="width:40%" data-column-id="description">Descriptive Title</th>
              <th data-column-id="time">Time</th>
              <th data-column-id="days">Days</th>
              <th data-column-id="room">Room</th>
              <th data-column-id="units">Units</th>
              <th data-column-id="units">Slots</th>
              <th data-column-id="units">Reserved</th>
              <th data-column-id="units">Status</th>
            </tr>
          </thead>  
        </tbody>
      </table>
      
    </div>
  </div>

  <div class="col-md-12">
    <div class="panel panel-primary">
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
            <th class="none">Units</th>
            <th class="none">Units</th>
            <th class="none">Units</th>
          </tr>
        </tbody>
      </table>
    </div>
 <div class="col-md-9"> </div>
    <form id="eform" onsubmit="return isValidForm()" action="payments.php" method="post">
    <div class="col-md-3">
      <p id="noOfUnits">Total Number of Units: <span id="units"></span></p>
    </div>
    
    
    <div class="col-md-11"> </div>
    <form id="eform" onsubmit="return isValidForm()" action="payments.php" method="post">
    <div class="col-md-1">
      <button type="submit" class="btn btn-primary" onclick="validateUnits()">Pre-Enroll</button>
      <br>
    </div>
  </div>

</div>

  <!-- script.js -->
  <script src="js/script.js"></script>

  <!-- Drag and Drop -->
  <script src="jq/jquery-2.1.4.min.js"></script>
  <script src="jq/jquery-ui.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.bootgrid.min.js"></script>
  <script>
    var tbody =document.getElementById('blkTbl');
    var rows = tbody.getElementsByTagName('tbody');
    var blockno = 0;
    showActiveBlock();
    function nextBlock(){
      if(blockno<rows.length-1)
        blockno++;
      showActiveBlock();
    }
    function previousBlock(){
      if(blockno>0)
      blockno--;
      showActiveBlock();
    }
    function showActiveBlock(){
      for(var x = 0; x<rows.length; x++){
      if(x!= blockno){
        rows[x].className = 'hidden';
      }else{
        rows[x].className = '';
        document.getElementById('currentBlock').innerHTML = "Block : " + (blockno+1);
      }
    }
    }
  </script>
</body>

</html>
