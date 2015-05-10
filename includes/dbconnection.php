<?php
$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "enrollment";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//-----------------------------------------------------------------------------------------
try
{
	$DB_con = new PDO("mysql:host={$servername};dbname={$dbname}",$username,$password);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception)
{
	echo $exception->getMessage();
}

include_once 'pagination.php';
$paginate = new paginate($DB_con);

?>