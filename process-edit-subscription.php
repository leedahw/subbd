<?php 
//insert-edit-article
session_start();
if ($_SESSION["userType"]=='admin'){
//show page
//receive POST data from edit-article
$img = $_FILES["img"]["name"];
$title = $_POST["title"];
$author = $_POST["author"];
$category = $_POST["category"];
$content = addslashes($_POST["content"]);
$articleLink = $_POST["articleLink"];
$featured = $_POST["featured"];
$articleId = $_POST["articleId"];

//connect to db
include("includes/dbconfig.php");

//update db with declared var
$stmt = $pdo->prepare("UPDATE `article` 
SET `title`='$title' , `author`='$author' , `category`='$category' , `content`='$content' , `articleLink`='$articleLink', `featured`='$featured', `img`='$img'
WHERE `article` . `articleId` = $articleId");

$uploaddir = "uploads/";
$uploadfile = $uploaddir . basename($_FILES["img"]["name"], time(). "_{$img}");
if (move_uploaded_file($_FILES["img"]["tmp_name"], $uploadfile)) {
	echo "Image upload successful!\n";
}else{
	echo "Image upload Failed.\n";
}

$stmt->execute();
?>

<p>Edit Submitted</p>
<a href = "homepage.php">Back to Home</a>
<?php

}else{
?>
<p>ACCESS DENIED. Admin Access Only.</p>
<a href = "homepage.php">Back to Home</a>
<?php

}
?>
