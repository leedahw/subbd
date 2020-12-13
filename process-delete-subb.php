<?php
session_start();
if ($_SESSION["userId"]){
//process-delete-person.php

//receive POST data from delete form
$subId = $_POST["subId"];

//delete person record (row)
include('includes/dbconfig.php');

$stmt = $pdo->prepare("DELETE FROM `subscription`
	WHERE `subscription`.`subId` = $subId;");

$stmt->execute();

}
?>