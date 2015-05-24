<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
     ?>


</head>

<body onload=display_ct();>

    <?php include 'includes/nav.php';?>

    </head>

   
        </div>
        <!-- /.container -->
    </nav>    
    <!-- Page Content -->
    <div class="container">
      
        <!-- /.row -->

    <div class="row">
    <div class="col-md-12">
          <br>
          <br>
          <h4>You have successfully pre enrolled your subject. <br><br>To be officially enrolled please settle your payment until 
           <?php
          $rightnow = date('Y-m-d');
          $add7days = date('Y-m-d', strtotime('+3 days'));
          echo "$add7days.";
          ?></h4>

          <br>
          <br>
          <h4>You will be informed if your payment has been acknowledged.</h4>
    </div>



    <!-- /.container -->
    <!-- validate form -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
