<?php session_start();
include('includes/standardheader.html');
if($_SESSION["userId"]){
//if logged in then show this page
   $subId = $_GET["subId"];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="visual subscription manager">
    <meta name="keywords" content="subbd homepage">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Subb'd - Your Personal Subscription Manager</title>
</head>
<body class="gradient-back"> 
<?php        
//connect to db
	include("includes/dbconfig.php");
    
    //get user information.ereference session userId
    $stmt = $pdo->prepare("SELECT * FROM `subscription` 
    WHERE `subscription` . `subId` = $subId");

    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!-- show a prefilled form we can edit -->
<form class="drop-shadow" style="width:fit-content" id="edit-subb-form" action="process-edit-subb.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="subId" value="<?php echo($row["subId"]);?>"/>
    <input type="hidden" name="userId" value="<?php echo($row["userId"]);?>"/>
    <h3>Subb Name: <input type="text" name="subName" value="<?php echo($row["subName"]);?>"><h3>
    <h3>Category: </h3>	
		<div id="radio-buttons">
			<input type="radio" id="entertainment" name="category" value="entertainment"/>
				<label for="entertainment">entertainment</label>
			<input type="radio" id="productivity" name="category" value="productivity"/>
				<label for="productivity">productivity</label>
			<input type="radio" id="utilities" name="category" value="utilities"/>
				<label for="utilities">utilities</label>
		</div>
    <h3>Frequency: <select name="frequency" id="frequency">
			<option value = "weekly">weekly</option>
			<option value = "monthly">monthly</option>
			<option value = "yearly">yearly</option>
		</select></h3>
        <h3>Cost: $ <input type= "number" step= "0.01" id="currency" name="cost" value="<?php echo($row["cost"]);?>"/>
        <input type="text" id="currency"name="currency" value="<?php echo($row["currency"]);?>"/></h3>

        <input type="submit" value="Confirm Edit"/>
        <a id="cancel" href="homepage.php">Cancel</a>
    </form>
    </body>
    </html>
<?php
}else{
?>
<p>Please Login First</p>
<a href = "homepage.php">Back to Home</a><?php


}
?>