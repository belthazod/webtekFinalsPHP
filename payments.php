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

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Payment
        
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Payment</li>
                </ol>
            </div>
        </div><!-- Page Heading/Breadcrumbs -->
      
        <!-- /.row -->

    <div class="row">
    <div class="col-md-12">

      <form class="form-horizontal" role="form">
          <!-- Form Name -->
            <p>Date Enrolled :<span id='ct' ></span><script> 
                function display_c(){
                var refresh=1000; // Refresh rate in milli seconds
                mytime=setTimeout('display_ct()',refresh)
            }
            var x;
            function display_ct() {
                var strcount;
                x = new Date(); 
                var x1=" " + x.getMonth() + "/" + x.getDate() + "/" + x.getFullYear(); 
                x1 = x1 + " - " + x.getHours( )+ ":" + x.getMinutes() + ":" + x.getSeconds();
                document.getElementById('ct').innerHTML = x1;
                if(document.getElementById('due').innerHTML == ""){
                    var y =  x.getMonth() + "/" + (x.getDate()+2) + "/" + x.getFullYear();
                document.getElementById('due').innerHTML =y;
                }
                tt=display_c();
                }

            </script>
            <p><b>Schedule valid for two business days.</b></p>
            <label>Schedule Due date</label><p id='due'></p>
 
    <h4><a data-toggle="modal" data-target="#myModal">Schedule</a></h4>
        
                            <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Enrolled Schedule</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Sched goes here
                                  </div>
                            </div>
                        </div>
                    </div> 
          <!-- Text input-->
 
    <fieldset>
    <div class="row">
  <!-- Default panel contents -->
  <div class="panel-heading">Breakdown of Fees</div>

  <!-- Table -->
  <table class="table">
    <tr>
    <th>Reference</th>
    <th>Explanation</th>
    <th>Number of Units </th>
    <th>Amount</th>
    </tr>
    
    <tr>
    <th></th>
    <th>Beginning Balance</th>
    <th>n/a</th>
    <th>-1,000.00</th>
    </tr>
    
    <tr>
    <th>General subjects</th>
    <th>Tuition fee @300.00/unit</th>
    <th>2</th>
    <th>600.00</th>
    </tr>
    
    <tr>
    <th>Major subjects</th>
    <th>Tuition fee @500.00/unit</th>
    <th>4</th>
    <th>2,000.00</th>
    </tr>

    <tr>
    <th>Laboratory Fees</th>
    <th>Laboratory and other fees</th>
    <th>n/a</th>
    <th>15,000.00</th>
    </tr>
    
    <tr>
    <th></th>
    <th></th>
    <th>Total Balance</th>
    <th>16,600.00</th>
    </tr>
    
    <tr>
    <th></th>
    <th></th>
    <th>Downpayment</th>
    <th>8,600.00</th>
    </tr>
    
  </table>
</div>
</fieldset>
</form>

	<br>
	<br>
    <fieldset>
    	<h4>Payment Method</h4>
    		<input type="radio" id="onsite" name="amount" value="onsi">On-Site Payment
         	<input type="radio" id="online" name="amount" value="onli">Online Payment	
            <br>
            <br>
         	<button onclick="myfunction()">Next</button>
    </fieldset>              
        <script>
            function myfunction(){

                if (document.getElementById('onsite').checked) {
                    window.location.href = "";
                } else if (document.getElementById('online').checked){
                    window.location.href = "cc-payment.php";

                }           
            }
        
        </script>    
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
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
