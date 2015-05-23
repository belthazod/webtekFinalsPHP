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

            function display_ct() {
                var strcount
                var x = new Date()
                var x1=" " + x.getMonth() + "/" + x.getDate() + "/" + x.getYear(); 
                x1 = x1 + " - " + x.getHours( )+ ":" + x.getMinutes() + ":" + x.getSeconds();
                document.getElementById('ct').innerHTML = x1;

                tt=display_c();
                }
            </script>
            <p><b>Schedule valid for two business days.</b>
 
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
    <div class="panel panel-default">
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

</form>
        </div>
                    
        </fieldset>

        <fieldset>
            <legend>Online Payment(Credit Card)</legend>
            <a href="http://www.visa.com/globalgateway/"><img src="imgs/visa.gif"></a>
            <a href="http://www.mastercard.com"><img src="imgs/master.gif"></a>
            <a href="http://www.discover.com/"><img src="imgs/discover.gif"></a>
            <a href="http://www.americanexpress.com/"><img src="imgs/american.gif"></a>
            <br>
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="textinput">Amount:</label>
                <div class="col-sm-4">
                  <input type="radio" name="amount" value="full">Full Tuition
                  <input type="radio" name="amount" value="down">Down Payment
                </div>
            </div>
           <form action="./cc-payment.html">
                <input type="button" onclick="window.location.href='cc-payment.html'"  value="Proceed" style="width: 300px; margin: 0 auto;" >
           </form>
        </fieldset>
            
        <hr>
    </form>
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
