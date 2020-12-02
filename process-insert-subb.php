<?php 
session_start();
if($row){
//process-insert-article.php
$_SESSION["userId"] =$row["userId"]; //if session userId equals userId

//declare and receive input
$userId = $_SESSION["userId"];
$subName = $_POST["subName"];
$category = $_POST["category"];
$frequency = $_POST["frequency"];
$cost = $_POST["cost"];
$img = $_FILES["img"]["name"];

//insert a new person record into the person table
include('includes/dbconfig.php');


$stmt = $pdo->prepare("INSERT INTO `subscription` 
	(`subId`, `userId`, `subName`,  `category`, `frequency`, `cost`, `img`) 
	VALUES (NULL, '$userId', '$subName', '$category', '$frequency', '$cost', '$img');");

$uploaddir = "uploads/";
$uploadfile = $uploaddir . basename($_FILES["img"]["name"], time(). "_{$img}");
if (move_uploaded_file($_FILES["img"]["tmp_name"], $uploadfile)) {
	echo "Image upload successful!\n";
}else{
	echo "Image upload failed.\n";
}


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