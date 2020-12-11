<?php
//process-signup.php

//receive input
$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];

//this part adds a new user to the 'user' table
include('includes/dbconfig.php');

//stmtand execute
$stmt = $pdo->prepare("INSERT INTO `user` 
	(`userId`, `fName`, `lName`, `emailAddress`, `password`) 
	VALUES (NULL, '$firstName', '$lastName', '$emailAddress', '$password');");

$stmt->execute();
?>