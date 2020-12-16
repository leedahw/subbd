<?php 
//insert-edit-article
session_start();
include('includes/standardheader.html');
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
$stmt = $pdo->prepare("UPDATE `subscription` 
SET `subId`='$subId' , `userId`='$userId' , `subName`='$subName' , `category`='$category' , `frequency`='$frequency', `cost`='$cost', `currency`='$currency'
WHERE `subscription` . `subId` = $subId");

$stmt->execute();
?>
<body class="gradient-back">
<form class ="drop shadow form">
<h2 style="margin-left:auto; margin-right:auto;">Edit Submitted</h2>
<a style="margin-left:auto; margin-right:auto;" href = "homepage.php">Back to Home</a>
</form>

</body>
<?php

}else{
?>

<body class="gradient-back">
<form class ="drop shadow form">
<h2 style="margin-left:auto; margin-right:auto;">Please Login First</h2>
<a style="margin-left:auto; margin-right:auto;" href = "login.php">Login Here</a>
</form>
</body>

<?php
}
?>