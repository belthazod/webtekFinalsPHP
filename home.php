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

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('imgs/index.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imgs/img4.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imgs/img3.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Saint Louis University Online Enrollment
                </h1>
            </div>

            
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       
                            <?php
                            $query = "SELECT title, content from announcement where announcement_id = '3'"; 
                            $rs = $conn->query($query);
                            while($resultRow = $rs->fetch_assoc()) {
                                echo '<h4>' . $resultRow['title'] . '</h4>';

                            }

                            ?>
                        
                    </div>
                    <div class="panel-body">
                        <?php
                            $query = "SELECT title, content from announcement where announcement_id = '3'"; 
                            $rs = $conn->query($query);
                            while($resultRow = $rs->fetch_assoc()) {
                                echo '<p>' . $resultRow['content'] . '<p>';

                            }
                            
                            ?>


                       

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                     <?php
                            $query = "SELECT title, content from announcement where announcement_id = '6'"; 
                            $rs = $conn->query($query);
                            while($resultRow = $rs->fetch_assoc()) {
                                echo '<h4>' . $resultRow['title'] . '</h4>';

                            }

                            ?>
                    </div>
                    <div class="panel-body">
                         <?php
                            $query = "SELECT title, content from announcement where announcement_id = '6'"; 
                            $rs = $conn->query($query);
                            while($resultRow = $rs->fetch_assoc()) {
                                echo '<p>' . $resultRow['content'] . '<p>';

                            }
                            
                            ?>

     

                     

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
            <?php
                            $query = "SELECT title, content from announcement where announcement_id = '7'"; 
                            $rs = $conn->query($query);
                            while($resultRow = $rs->fetch_assoc()) {
                                echo '<h4>' . $resultRow['title'] . '</h4>';

                            }

                            ?>
                    </div>
                    <div class="panel-body">
                        <?php
                            $query = "SELECT title, content from announcement where announcement_id = '7'"; 
                            $rs = $conn->query($query);
                            while($resultRow = $rs->fetch_assoc()) {
                                echo '<p>' . $resultRow['content'] . '<p>';

                            }
                            
                            ?>



                        

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        

        

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">

                    <p>Saint Louis University is now offering online enrollment for enrolled students! <br>Enrollment Period: June 9, 2015 - June 11,2015<br> Summer Term Begins : June 15, 2015 </p>

                    <p> Saint Louis University is regarded as one of the Philippines' respected and leading educational institutions that has grown with the demands of the current and future environments for its students and faculty alike.</p>

                </div>
                <div class="col-md-4">
                    <a href="subjects.php" class="btn btn-lg btn-primary btn-block" href="#">Pre-Enroll now</a>
                </div>
            </div>
        </div>

        <hr>

    

    </div>
    <!-- /.container -->


        
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
     <!-- Bootstrap Core JavaScript -->


    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
