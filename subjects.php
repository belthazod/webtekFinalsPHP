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

    <script>var year = '<?php echo $resultRow['year'] ?>';</script>

    <title>Pre Enroll</title>

</head>

<body>

  <?php include 'includes/nav.php';?> 

  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
  ...
  <li role="presentation" class="dropdown-header">Dropdown header</li>
  ...
</ul>
<br>


    
    <div class="row form-group block-chooser panel panel-primary">
      <br>

       <div class="col-md-12">
    
      <div class="col-md-1">
        <div class="block-chooser-item selected">
          
                
            <span class="title">Block 1</span>
            
            <input type="radio" name="block" value="1" checked="checked">
          
          <div class="clear"></div>
        </div>
      </div>
      
       <div class="col-md-1">
        <div class="block-chooser-item">
         
                
            <span class="title">Block 2</span>
            
            <input type="radio" name="block" value="2">
         
          <div class="clear"></div>
        </div>
      </div>
      
       <div class="col-md-1">
        <div class="block-chooser-item">
          
               
            <span class="title">Block 3</span>
            
            <input type="radio" name="block" value="3">
          
          <div class="clear"></div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="block-chooser-item">
          
               
            <span class="title">Block 4</span>
            
            <input type="radio" name="block" value="4">
          
          <div class="clear"></div>
        </div>
      </div>
      <div class="col-md-1">
        <div class="block-chooser-item">
          
               
            <span class="title">Block 5</span>
            
            <input type="radio" name="block" value="5">
          
          <div class="clear"></div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="block-chooser-item">
          
               
            <span class="title">Block 6</span>
            
            <input type="radio" name="block" value="6">
          
          <div class="clear"></div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="block-chooser-item">
          
               
            <span class="title">Block 7</span>
            
            <input type="radio" name="block" value="7">
          
          <div class="clear"></div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="block-chooser-item">
          
               
            <span class="title">Block 8</span>
            
            <input type="radio" name="block" value="8">
          
          <div class="clear"></div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="block-chooser-item">
          
               
            <span class="title">Block 9</span>
            
            <input type="radio" name="block" value="9">
          
          <div class="clear"></div>
        </div>
      </div>

      

    </div>
      
    </div>
   
      
         

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
          try
          {
            $DB_con = new PDO("mysql:host={$servername};dbname={$dbname}",$username,$password);
            $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch(PDOException $exception)
          {
            echo $exception->getMessage();
          }

          include_once 'pagination.php';
          $paginate = new paginate($DB_con);

          $query = "SELECT classcode, courseno, description, time, days,room, units from class natural join course";       
          $records_per_page=10;
          $newquery = $paginate->paging($query,$records_per_page);
          $paginate->dataview($newquery);
          $paginate->paginglink($query,$records_per_page);    
        ?>

      </tbody>
    </table>

<!-- Pagination 
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
        </div> --> 

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
     <p id="noOfUnits">Total Number of Units: <span id="units"></span></p>


   <div class="col-md-10">
         
        </div>
          <form id="eform" onsubmit="return isValidForm()" action="payments.php" method="post">
          <div class="col-md-2">
         <button type="submit" class="btn btn-primary" onclick="validateUnits()">Pre-Enroll</button>
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
