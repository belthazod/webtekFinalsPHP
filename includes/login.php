<?php
session_start();
include 'dbconnection.php';

$sql = "SELECT idno, password, firstname, lastname FROM student";
$result = $conn->query($sql);
$flag = false;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        if($row["idno"] == $_POST["idno"] && $row["password"] == $_POST["password"]){
        	// Set session variables
      
		$_SESSION["idno"] = $row["idno"];
		$_SESSION["password"] =  $row["password"];
        $_SESSION["firstname"] =  $row["firstname"];
        $_SESSION["lastname"] =  $row["lastname"];
        
		$flag = true;
        header('Location: ../home.php');
		break;
        }else{
        	$flag = false;

        }
        
    }
    if($flag == false){
    		header('Location: ../index.php?failed=true');
        }

} else {
    //header('Location: ../home.html');
}
$conn->close();
?>