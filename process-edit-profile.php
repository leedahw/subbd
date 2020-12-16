<?php
//updates user details in user table 
//start session
session_start();

//receive input var
$userId = $_SESSION["userId"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("UPDATE `user` SET `fName`= '$fName',`lName`= '$lName',`emailAddress`= '$emailAddress',`password`= '$password' WHERE `userId` = '$userId' ");

$stmt->execute();
?>