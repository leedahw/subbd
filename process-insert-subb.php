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
	VALUES (NULL, '$userId', '$subName', '$category', '$frequency', '$cost', '$currency');"
	);

$stmt->execute();
//header("Location: homepage.php");
}
?>