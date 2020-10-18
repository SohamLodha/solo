<?php
session_start();
$conn = mysqli_connect('127.0.0.1','root','','mysql');  
mysqli_select_db($conn, 'SOLO');   
$email = $_POST["email"];  
$naam = $_POST["name"];
$message = $_POST["message"];


$s = "INSERT INTO SOLO (email,name,message) VALUES ('$email','$naam','$message');"; 

$temp=$conn->query($s);
header("LOCATION:thankyou.html");
?>

