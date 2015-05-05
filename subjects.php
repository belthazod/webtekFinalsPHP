<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'includes/dbconnection.php' ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="webtek 2015">
    <meta name="author" content="">

    <title>Pre Enroll</title>

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
                        <a href="subjects.html">Pre-Enroll</a>
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

 
    <div class="col-md-9">
              
   </div>
   
     <div class="col-md-3">
              <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
   </div>
              
   

	
<div class="well">


    <table class="table">
      <thead>
        <tr>
        <th></th>
          <th>Class Code</th>
          <th>Course Number</th>
          <th>Descriptive Title</th>
          <th>Time</th>
          <th>Days</th>
		      <th>Room</th>
		      <th>Units</th>
		
       
        </tr>
      </thead>
      <tbody>
        <!--<tr>
          <td>9570</td>
          <td>IT 324L</td>
          <td>Web Systems and Technologies</td>
          <td>1:00-2:30 WS</td>
		  <td>S326</td>
		  <td>1</td>
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
		
		<tr>
          <td>9570</td>
          <td>IT 324L</td>
          <td>Web Systems and Technologies</td>
          <td>1:00-2:30 WS</td>
		  <td>S326</td>
		  <td>1</td>
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
		
		<tr>
          <td>9570</td>
          <td>IT 324L</td>
          <td>Web Systems and Technologies</td>
          <td>1:00-2:30 WS</td>
		  <td>S326</td>
		  <td>1</td>
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>
		
		<tr>
          <td>9570</td>
          <td>IT 324L</td>
          <td>Web Systems and Technologies</td>
          <td>1:00-2:30 WS</td>
		  <td>S326</td>
		  <td>1</td>
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
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
		  <td ><input type="checkbox" aria-label="..."></td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>
        </tr>-->
         <?php 
              $sql = "SELECT classcode, courseno, description, time, days,room, units from class natural join course";
              

              $rs = $conn->query($sql);
              while($resultRow = $rs->fetch_assoc()) {
              echo '<tr>
                  <td><input type="checkbox"</td>
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
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>

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

       
        <!-- /.row -->

        <hr>

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

</body>

</html>
