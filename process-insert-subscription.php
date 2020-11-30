<?php 
session_start();
if($_SESSION["userType"]=='admin'){
//process-insert-article.php

//declare and receive input
$category = $_POST["category"];
$title = $_POST["title"];
$author = $_POST["author"];
$category = $_POST["category"];
$content = addslashes($_POST["content"]);
$articleLink = $_POST["articleLink"];
$featured = $_POST["featured"];
$img = $_FILES["img"]["name"];

//insert a new person record into the person table
include('includes/dbconfig.php');


$stmt = $pdo->prepare("INSERT INTO `article` 
	(`articleId`, `title`, `author`,  `category`, `content`, `articleLink`, `featured`, `img`) 
	VALUES (NULL, '$title', '$author', '$category', '$content', '$articleLink', '$featured', '$img');");

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