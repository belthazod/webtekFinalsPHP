<!DOCTYPE>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="webtek 2015">
    <meta name="author" content="">

    <title>Welcome - Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <?php include 'includes/dbconnection.php' ?>

</head>
<body>
	<form method="POST">
	<p>Id Number: 
	<input type="text" name="idnumber" placeholder="1234567" required>
	<p>password
	<input type="password" name="password" placeholder="jsA!@MKl" required>
	</form>
</body>
</html>