<?php
//process-signup.php

//receive input
$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];
$currency = $_POST["currency"];

//this part adds a new user to the 'user' table
$dsn = "mysql:host=localhost;dbname=subbd;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//stmtand execute
$stmt = $pdo->prepare("INSERT INTO `user` 
	(`userId`, `fName`, `lName`, `emailAddress`, `password`, `currency`) 
	VALUES (NULL, '$firstName', '$lastName', '$emailAddress', '$password', '$currency');");

$stmt->execute();
?>
<p>Thank you for signing up!</p>
<a href="login.php">Go to Login</a>