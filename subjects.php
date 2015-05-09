<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
     ?>


    <title>SPre Enroll</title>

</head>

<body>

  <?php include 'includes/nav.php';?> 

  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
  ...
  <li role="presentation" class="dropdown-header">Dropdown header</li>
  ...
</ul>
<br>

   
      
         

      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"> Available Subjects</h3>
            
          </div>
          <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#t_draggable1" placeholder="Filter Available Subjects" />
          </div>
          
    <table class="tables_ui table table-hover" id="t_draggable1">
      <tbody class="t_sortable">

        <tr>
       
          <th>Class Code</th>
          <th>Course No.</th>
          <th>Descriptive Title</th>
          <th>Time</th>
          <th>Days</th>
      <th>Room</th>
      <th>Units</th>
        </tr>

  
      
 <?php 
              $sql = "SELECT classcode, courseno, description, time, days,room, units from class natural join course limit 10";
              

              $rs = $conn->query($sql);
              while($resultRow = $rs->fetch_assoc()) {
              echo '<tr>
                  
                  <td>'. $resultRow['classcode'] .'</td>
                  <td>'. $resultRow['courseno'] .'</td>
                  <td>'. $resultRow['description'] .'</td>
                  <td>'. $resultRow['time'] .'</td>
                  <td>'. $resultRow['days'] .'</td>
                  <td>'. $resultRow['room'] .'</td>
                  <td>'. $resultRow['units'] .'</td>'."
                </tr>";
              }
            echo 
            '
            </tbody>
            </table>';
    ?>

    <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>

</div>


        </div>


      </div>
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
          
    <table class="tables_ui table table-hover" id="t_draggable2">
      <tbody class="t_sortable">

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
   <div class="col-md-10">
         
        </div>
          
          <div class="col-md-2">
         <button type="submit" class="btn btn-primary">Pre-Enroll</button>
        </div>


        </div>
     

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

    </div>
    <!-- /.container -->

    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- script.js -->
    <script src="js/script.js"></script>

</body>

</html>
