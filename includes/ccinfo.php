<?php 
     include 'dbconnection.php';
    $sql = "SELECT* FROM paymentdetails";
    $result = $conn->query($sql);

    $stmt = $conn->prepare("INSERT INTO paymentdetails(cardholder, cardnumber, expirydatemonth, expirydateyear, add1, add2, phone, email) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $cardholder, $cardnumber, $expirydatemonth, $expirydateyear, $add1, $add2, $phone, $email);
    // insert one row
    $cardholder = $_POST["cardholder"];
    $cardnumber = $_POST["cardnumber"];
    $expirydatemonth = $_POST["expirydatemonth"];
    $expirydateyear = $_POST["expirydateyear"];
    $add1 = $_POST["add1"];
    $add2 = $_POST["add2"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    
    $stmt->execute();
    $conn->close();
    header("Location: ../payok.php");


?>