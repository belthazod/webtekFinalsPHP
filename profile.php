<!DOCTYPE html>
<html lang="en">

<head>
    <?php

     include 'includes/dbconnection.php';
     include 'includes/header.php';
	 include 'includes/headerelements.php'; 
	 $param = $_GET['idno'];
     
	 $sql = "SELECT * FROM student where idno = ".$_SESSION["idno"];
	 $rs = $conn->query($sql);
	$resultRow = $rs->fetch_assoc() 
     ?>


</head>

<body>

	      <?php include 'includes/nav.php';?> 
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
      
        <!-- /.row -->

     <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" role="form">
        <fieldset>
          
          <!-- Form Name -->
          <legend>View Profile</legend>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">ID Number</label>
            <div class="col-sm-4">
               <?php echo $resultRow['idno'] ?>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Course</label>
            <div class="col-sm-2">
              <?php echo $resultRow['course'] ?>
            </div>
             <label class="col-sm-1 control-label" for="textinput">Year</label>
             <div class="col-sm-1">
               <?php echo $resultRow['year'] ?>
            </div>


          </div>

        

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Name</label>
            <div class="col-sm-10">
               <?php echo $resultRow['lastname'] . ", " . $resultRow['firstname'] ?>
            </div>
          </div>

           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Baguio Address</label>
            <div class="col-sm-10">
              <?php echo $resultRow['baguio_address'] ?>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Home Address</label>
            <div class="col-sm-10">
              <?php echo $resultRow['home_address'] ?>
            </div>
          </div>

           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Last School Attended</label>
            <div class="col-sm-10">
             <?php echo $resultRow['last_school_attended'] ?>
            </div>
          </div>

          <hr>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Citizenship</label>
            <div class="col-sm-4">
               <?php echo $resultRow['citizenship'] ?>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Nationality</label>
            <div class="col-sm-4">
               <?php echo $resultRow['nationality'] ?>
            </div>
          </div>

          

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Father's Name</label>
            <div class="col-sm-4">
               <?php echo $resultRow['father_name'] ?>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Contact</label>
            <div class="col-sm-4">
               <?php echo $resultRow['father_contact'] ?>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Occupation</label>
            <div class="col-sm-4">
               <?php echo $resultRow['father_occupation'] ?>
            </div>

            
          </div>

              <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Mother's Maiden Name</label>
            <div class="col-sm-4">
               <?php echo $resultRow['mother_name'] ?>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Contact</label>
            <div class="col-sm-4">
                <?php echo $resultRow['mother_contact'] ?>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Occupation</label>
            <div class="col-sm-4">
                <?php echo $resultRow['mother_occupation'] ?>
            </div>

            
          </div>

          <hr>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Civil Status</label>
            <div class="col-sm-4">
                <?php echo $resultRow['civilstatus'] ?>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Religion</label>
            <div class="col-sm-4">
                <?php echo $resultRow['religion'] ?>
            </div>
          </div>




           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Guardian's Name</label>
            <div class="col-sm-4">
                <?php echo $resultRow['guardian_name'] ?>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Contact</label>
            <div class="col-sm-4">
               <?php echo $resultRow['guardian_contact'] ?>
            </div>
          </div>

                    <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Relationship</label>
            <div class="col-sm-4">
              <?php echo $resultRow['guardian_relationship'] ?>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Address</label>
            <div class="col-sm-4">
               <?php echo $resultRow['guardian_address'] ?>
            </div>
          </div>

     

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>WEBTEK 2015</p>
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
