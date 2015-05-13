<?php
session_start();
include 'dbconnection.php';

 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_POST["password2"] !== $_POST["password3"]){
	header('Location: ../passwordform.php?failed=true');
}
if ($_POST["password1"] == $_POST["password2"]){
	header('Location: ../passwordform.php?failed=false');
}
else{

// prepare and bind
    $stmt = $conn->prepare("UPDATE student SET password = ? WHERE idno = ?");
    $stmt->bind_param("ss", $pass, $user);


// insert one row
    $user = $_SESSION["idno"];
    $pass = $_POST["password2"];
    
    $stmt->execute();
header('Location: ../passwordform.php?success=true');
}
$conn->close();
?>