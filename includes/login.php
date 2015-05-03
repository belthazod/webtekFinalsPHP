<?php
include 'dbconnection';

$sql = "SELECT idno, password FROM student";
$result = $conn->query($sql);
$flag = false;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        if($row["idno"] == $_POST["idno"] && $row["password"] == $_POST["password"]){
        	// Set session variables
		$_SESSION["idno"] = $row["idno"];
		$_SESSION["password"] =  $row["password"];


		$flag = true;
		break;
        }else{
        	$flag = false;
        }
        
    }
    if($flag == false){
    		header('Location: ../index.php?failed=true');
        }

} else {
    //header('Location: index.php');
}

?>