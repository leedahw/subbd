<?php
//process-signup.php

//receive input
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];

//this part adds a new user to the 'user' table
include('includes/dbconfig.php');

//stmt and execute
$stmt = $pdo->prepare("INSERT INTO `user` 
	(`userId`, `fName`, `lName`, `emailAddress`, `password`) 
	VALUES (NULL, '$fName', '$lName', '$emailAddress', '$password');"
	);

$stmt->execute();
?>