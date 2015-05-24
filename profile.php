<!DOCTYPE html>
<html lang="en">

<head>
    <?php

     include 'includes/dbconnection.php';
     include 'includes/header.php';
	 include 'includes/headerelements.php'; 
	 //$param = $_GET['idno'];
     
	 $sql = "SELECT * FROM student where idno = ".$_SESSION["idno"];
	 $rs = $conn->query($sql);
	$resultRow = $rs->fetch_assoc() 
     ?>


</head>

<body>

	      <?php include 'includes/nav.php';?> 

          <br>
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
         <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultRow['image'] ).'"/>'; ?>

          <!-- Text input-->
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">ID Number</label>
            <div class="col-sm-2">
               <input type="email" class="form-control" id="inputEmail3" 
               value="<?php echo $resultRow['idno'] ?>" 
               disabled/>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Course</label>
            <div class="col-sm-2">
              <input type="email" class="form-control" id="inputEmail3" 
              value="<?php echo $resultRow['course'] ?>"
              disabled/>
            </div>

             <label class="col-sm-1 control-label" for="textinput">Year</label>
             <div class="col-sm-1">
              <input type="email" class="form-control" id="inputEmail3" 
               value="<?php echo $resultRow['year'] ?>"
               disabled/>
            </div>


          </div>


          <div class="form-group">
           <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="inputEmail3" 
              value="<?php echo $resultRow['lastname'] . ", " . $resultRow['firstname'] ?>" 
              disabled/>
            </div>
          </div>
 

           <div class="form-group">
            <label class="col-sm-2 control-label">Baguio Address</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="inputEmail3" 
              value="<?php echo $resultRow['baguio_address'] ?>" 
              disabled/>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label">Home Address</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="inputEmail3" 
              value="<?php echo $resultRow['home_address'] ?>" 
               disabled/>

            </div>
          </div>

           <div class="form-group">
            <label class="col-sm-2 control-label">Last School Attended</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="inputEmail3" 
             value="<?php echo $resultRow['last_school_attended'] ?>" 
               disabled/>
            </div>
          </div>

          <hr>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Citizenship</label>
            <div class="col-sm-4">
               <input type="email" class="form-control" id="inputEmail3" 
               value="<?php echo $resultRow['citizenship'] ?>"
               disabled/>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Nationality</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="inputEmail3" 
              value="<?php echo $resultRow['nationality'] ?>"
              disabled/>
            </div>
          </div>

          

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Father's Name</label>
            <div class="col-sm-4">
               <input type="email" class="form-control" id="inputEmail3" 
               value="<?php echo $resultRow['father_name'] ?>"
               disabled/>
            </div>

            <label class="col-sm-2 control-label" for="textinput">Contact</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3" 
               value="<?php echo $resultRow['father_contact'] ?>"
               disabled/>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Occupation</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3" 
               value="<?php echo $resultRow['father_occupation'] ?>"
               disabled/>
            </div>

            
          </div>

              <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Mother's Maiden Name</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3"
               value="<?php echo $resultRow['mother_name'] ?>"
               disabled/>
            </div>


            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Occupation</label>
            <div class="col-sm-4">
               <input type="email" class="form-control" id="inputEmail3"
                value="<?php echo $resultRow['mother_occupation'] ?>"
                disabled/>
            </div>

            
          </div>

          <hr>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Civil Status</label>
              <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3"
               value="<?php echo $resultRow['civilstatus'] ?>"
               disabled/>
            </div>

              <label class="col-sm-2 control-label" for="textinput">Religion</label>
                <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail3"
                  value="<?php echo $resultRow['religion'] ?>"
                  disabled/>
                </div>
          </div>




           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Guardian's Name</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3"
                value="<?php echo $resultRow['guardian_name'] ?>"
                disabled/>
            </div>
            

            <label class="col-sm-2 control-label" for="textinput">Contact</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3"
               value="<?php echo $resultRow['guardian_contact'] ?>"
               disabled/>
            </div>
          </div>

            <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Relationship</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3"
              value="<?php echo $resultRow['guardian_relationship'] ?>"
              disabled/>
            </div>


            <label class="col-sm-2 control-label" for="textinput">Address</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3"
               value="<?php echo $resultRow['guardian_address'] ?>"
               disabled/>
            </div>
          </div>

     

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
  </div>      <!-- /.row -->

        <hr>

   

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
