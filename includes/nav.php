  <!-- Navigation -->
  <!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include 'includes/dbconnection.php';
    include 'includes/headerelements.php';
 

  if(!isset($_SESSION["idno"])){
    header('Location: index.php?loggedout=true');}
     ?>


    <title>Pre Enroll</title>

</head>
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
                <a class="navbar-brand" href="home.php">SLU Online Enrollment</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    
                   
                    <li>
                        <a href="subjects.php ">Pre-Enroll</a>
                    </li>

                    <!--<li>
                        <a href="payments.php">Payments</a>
                    </li>-->

                    
                    <li>
                        <a href="about.php">About</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profile  <span class="badge">1</span>
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">

                                                        <div class="col-md-5">
                                                           

                                                           <?php
                                                           echo '<img src="data:image/jpeg;base64,'.base64_encode( $_SESSION['image'] ).'"/>';
                                                            //<img src="http://placehold.it/120x120"
                                                              //  alt="Alternate Text" class="img-responsive" />
                                                           ?>
                                                            <p class="text-center small">
                                                                <a href="#">Change Photo</a></p>
                                                        </div> 
                                                        <div class="col-md-7">
                                                            <span><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></span>
                                                            <p class="text-muted small">
                                                               <?php echo $_SESSION['idno']?></p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href= <?php echo '"profile.php?idno="' . $_SESSION['idno'] . '"'?> class="btn btn-primary btn-sm active">View Profile</a>
                                                            <a href= <?php echo '"schedule.php?idno="' . $_SESSION['idno'] . '"'?> class="btn btn-primary btn-sm active">View Schedule</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">


                                                                <a href="passwordform.php" class="btn btn-default btn-sm">Change Password</a>
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