<?php
//process-signup.php

//receive input
$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];
$DOB = $_POST["DOB"];

//this part adds a new user to the 'user' table
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `user` 
	(`userId`, `fName`, `lName`, `emailAddress`, `password`, `DOB`) 
	VALUES (NULL, '$firstName', '$lastName', '$emailAddress', '$password', '$DOB');");

$stmt->execute();
?>
<p>Thank you for signing up!</p>
<a href="login.php">Go to Login</a>