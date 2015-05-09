<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="webtek 2015">
    <meta name="author" content="">

    <title>Webtek fnals 2015</title>

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
                <a class="navbar-brand" href="index.html">SLU Online Enrollment</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    
                    <li>
                        <a href="sidebar.html">Enrollment</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subjects<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Available</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Enrolled</a>
                            </li>
                           
                        </ul>
                    </li>

                    <li>
                        <a href="payments.html">Payments</a>
                    </li>

                    
                    <li>
                        <a href="about.html">About</a>
                    </li>

                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <ul class="nav navbar-nav navbar-right" id="profile">
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
                                                                <a href="http://www.jquery2dotnet.com" class="btn btn-default btn-sm pull-right">Sign Out</a>
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
            <p>Date Enrolled : month-day-yyyy
            <p>Schedule valid until month-day-yyyy
 

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
            <img src="imgs/cc logos.gif">
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
