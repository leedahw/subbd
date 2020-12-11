<?php 
//insert-edit-article
session_start();
if ($_SESSION["userId"]){
//show page
//receive POST data from edit-article
$subId = $_POST["subId"];
$userId = $_SESSION["userId"];
$subName = $_POST["subName"];
$category = $_POST["category"];
$frequency = $_POST["frequency"];
$cost = $_POST["cost"];
$currency= $_POST["currency"];

//connect to db
include("includes/dbconfig.php");

//update db with declared var
$stmt = $pdo->prepare("UPDATE `article` 
SET `subId`='$subId' , `userId`='$userId' , `subName`='$subName' , `category`='$category' , `frequency`='$frequency', `cost`='$cost', `currency`='$currency'
WHERE `subscription` . `subId` = $subId");

$stmt->execute();
?>

<p>Edit Submitted</p>
<a href = "homepage.php">Back to Home</a>
<?php

}else{
?>
<p>Please Login First.</p>
<a href = "login.php">Login</a>
<?php

}
?>
