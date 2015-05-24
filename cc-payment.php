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
      
          <!-- Form Name -->
          <h1>Secure Payment</h1>
          <br>
          <br>
        <form class="form-horizontal" role="form">
          <!-- Text input-->
        <a href="http://www.visa.com/globalgateway/"><img src="imgs/visa.gif"></a>
            <a href="http://www.mastercard.com"><img src="imgs/master.gif"></a>
            <a href="http://www.discover.com/"><img src="imgs/discover.gif"></a>
            <a href="http://www.americanexpress.com/"><img src="imgs/american.gif"></a>
            <br>
            <br>
        <fieldset>
          <legend>Online Payment(Credit Card)</legend>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="textinput">Amount:</label>
                <div class="col-sm-4">
                  <input type="radio" name="amount" value="full">Full Tuition
                  <input type="radio" name="amount" value="down">Down Payment
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Credit Card Information</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Card Holder Name</label>
                <div class="col-sm-4">
                  <input type="text" placeholder="" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Card Number</label>
                <div class="col-sm-4">
                  <input type="text" placeholder="" class="form-control" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Expiry Date</label>
                    <div class="col-sm-4">
                                <SELECT NAME="CCExpiresMonth" required>
                                    <OPTION VALUE="" SELECTED>--Month--
                                    <OPTION VALUE="01">January (01)
                                    <OPTION VALUE="02">February (02)
                                    <OPTION VALUE="03">March (03)
                                    <OPTION VALUE="04">April (04)
                                    <OPTION VALUE="05">May (05)
                                    <OPTION VALUE="06">June (06)
                                    <OPTION VALUE="07">July (07)
                                    <OPTION VALUE="08">August (08)
                                    <OPTION VALUE="09">September (09)
                                    <OPTION VALUE="10">October (10)
                                    <OPTION VALUE="11">November (11)
                                    <OPTION VALUE="12">December (12)
                                  </SELECT> /
                                  <SELECT NAME="CCExpiresYear" required>
                                    <OPTION VALUE="" SELECTED>--Year--
                                    <OPTION VALUE="04">2015
                                    <OPTION VALUE="05">2016
                                    <OPTION VALUE="06">2017
                                    <OPTION VALUE="07">2018
                                    <OPTION VALUE="08">2019
                                    <OPTION VALUE="09">2020
                                    <OPTION VALUE="10">2021
                                    <OPTION VALUE="11">2022
                                    <OPTION VALUE="12">2023
                                    <OPTION VALUE="13">2024
                                    <OPTION VALUE="14">2025
                                    <OPTION VALUE="15">2026
                                </SELECT>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Security Code</label>
                        <div class="col-sm-2">
                          <input type="text" placeholder="" class="form-control" required>
                          <p><a data-toggle="modal" data-target="#myModal">what is this?</a></p>
        
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Credit Card Security Code</h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="./imgs/csc_1.gif">
                                    <img src="./imgs/csc_2.gif">
                                    <p>Visa®, Mastercard®, and Discover® cardholders:
                                        Turn your card over and look at the signature box. 
                                        You should see either the entire 16-digit credit card number or just the last four digits followed by a special 3-digit code. This 3-digit code is your CVV number / Card Security Code.
                                    <br>
                                    <p>American Express® cardholders:
                                        Look for the 4-digit code printed on the front of your card just above and to the right of your main credit card number. This 4-digit code is your Card Identification Number (CID). The CID is the four-digit code printed just above the Account Number.
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    
        </fieldset>

        <fieldset>
            <legend>Billing Information</legend>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Address 1</label>
                <div class="col-sm-8">
                  <input type="text" placeholder="" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Address 2</label>
                <div class="col-sm-8">
                  <input type="text" placeholder="" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Phone Number</label>
                <div class="col-sm-4">
                  <input type="text" placeholder="" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Email Address</label>
                <div class="col-sm-4">
                  <input type="text" placeholder="" class="form-control" required>
                </div>
              </div>
        </fieldset>
            <br>
            <br>
            <br>
            <div class="form-group">

                <div >
                  <input type="submit" class="form-control" value="Submit" style="width: 300px; margin: 0 auto;" onclick="myfunction()">
                  <script type="text/javascript">
                      function myfunction(){

                        window.location.href="payok.php"
                      }
                  </script>
                </div>
             </div>

        <hr>
    </form>

    <!-- /.container -->
    <!-- validate form -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
