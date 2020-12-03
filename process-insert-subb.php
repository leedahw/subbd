<?php 
session_start();
if($_SESSION["userId"]){
//process-insert-article.php

//declare and receive input
$userId = $_SESSION["userId"];
$subName = $_POST["subName"];
$category = $_POST["category"];
$frequency = $_POST["frequency"];
$cost = $_POST["cost"];
$currency= $_POST["currency"];

//insert a new person record into the person table
include('includes/dbconfig.php');


$stmt = $pdo->prepare("INSERT INTO `subscription` 
	(`subId`, `userId`, `subName`,  `category`, `frequency`, `cost`, `currency`) 
	VALUES (NULL, '$userId', '$subName', '$category', '$frequency', '$cost', '$currency');");

$stmt->execute();
?>
<p>Success!</p>
<a href = "homepage.php">Back to Home</a><?php

//header("Location: homepage.php");
}else{
	//do not show?>
<p>ACCESS DENIED.Admin Access Only.</p>
<a href = "homepage.php">Back to Home</p><?php
}
?>