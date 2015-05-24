<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
     ?>



<body onload=display_ct();>

    <?php include 'includes/nav.php';?>

    </head>

   
       
        <!-- /.container -->
  
    <!-- Page Content -->
     <div class="container">
    <div class="col-md-12">

      <br>

      <div class="col-md-12">

      <div class="alert alert-success align">

       <p> You have successfully pre enrolled your subject. 
        To be officially enrolled please settle your payment until 
           <strong>

           <?php
          $rightnow = date('Y-m-d');
          $add7days = date('Y-m-d', strtotime('+3 days'));
          echo "$add7days.";
          ?></h4>
          </strong>

          <br><br>
                           
          <h4>You will be informed if your payment has been acknowledged.</h4>                         
       
       </p>
        </div>
      
     

      </div>

    

  
 </div>
      </div>
        <!-- /.row -->

    


    <!-- /.container -->
    <!-- validate form -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
