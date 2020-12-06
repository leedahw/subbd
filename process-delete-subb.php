<?php
session_start();
if ($_SESSION["userType"]=='admin'){
//process-delete-person.php

//receive POST data from delete form
$articleId = $_POST["articleId"];

//delete person record (row)
include('includes/dbconfig.php');

$stmt = $pdo->prepare("DELETE FROM `article`
	WHERE `article`.`articleId` = $articleId;");

$stmt->execute();

header("Location: homepage.php");

}else{
    //block access?>
    <p>ACCESS DENIED. Admin Access Only.</p>
    <a href = "homepage.php">Back to Home</a><?php
}
?>