<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/dbconnection.php' ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="webtek 2015">
    <meta name="author" content="">

    <title>Webtek fnals 2015</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html">SLU Online Enrollment</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    
                   
                    <li>
                        <a href="subjects.php ">Pre-Enroll</a>
                    </li>

                    <li>
                        <a href="#">Payments</a>
                    </li>

                    
                    <li>
                        <a href="about.html">About</a>
                    </li>

                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profile
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">

                                                        <div class="col-md-5">
                                                            <img src="http://placehold.it/120x120"
                                                                alt="Alternate Text" class="img-responsive" />
                                                            <p class="text-center small">
                                                                <a href="#">Change Photo</a></p>
                                                        </div> 
                                                        <div class="col-md-7">
                                                            <span>STUDENT NAME</span>
                                                            <p class="text-muted small">
                                                               ID NO.</p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="#" class="btn btn-default btn-sm">Change Passowrd</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="includes/logout.php" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Available Subjects" />
          </div>
          
    <table class="table table-hover" id="dev-table">
      <thead>
        <tr>
       
          <th>Class Code</th>
          <th>Course No.</th>
          <th>Descriptive Title</th>
          <th>Time/Day</th>
      <th>Room</th>
      <th>Units</th>
       <th></th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
      
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
                  <td><input type='submit' name='Add' value='Add' class= 'btn btn-default'></td>
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
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table2" placeholder="Filter Subjects" />
          </div>
          
    <table class="table table-hover" id="dev-table2">
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- script.js -->
    <script src="js/script.js"></script>

</body>

</html>
