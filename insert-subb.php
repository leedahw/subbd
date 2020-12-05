<?php
session_start(); //session
include('includes/standardheader.html');
include('includes/dbconfig.php');

if($_SESSION["userId"]){
$userId= $_SESSION["userId"]; 
//allowed to see this page ig logged in correctly
//insert-article.php
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="form to insert article content">
    <meta name="keywords" content="subbs, form, insert">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>New Subb</title>
</head>
<body id="gradient-back">
	<form class="drop-shadow" id="insert-subb-form" action="process-insert-subb.php" method="POST" enctype= "multipart/form-data">
		<h3>Subb Name: <input type="text" name="subName" required/><h3>
		<div id="radio-buttons">
		<h3 id="category-label">Category:</h3>	
			<label><input type="radio" id="entertainment" name="category" value="entertainment"/>entertainment</label>		
			<label><input type="radio" id="productivity" name="category" value="productivity"/>productivity</label>
			<label><input type="radio" id="utilities" name="category" value="utilities"/>utilities</label>		
		</div>
		<h3>Frequency: <select name="frequency" id="frequency">
			<option value = "weekly">weekly</option>
			<option value = "monthly">monthly</option>
			<option value = "yearly">yearly</option>
			</select></h3>
		<h3>Cost: $ <input type= "number" step= "0.01" id="cost" name="cost"/> <input type="text" id="currency"name="currency" value="CAD"/></h3>
		<br/>
		<input type="submit" value = "submit"/>
		<a id="cancel" href="homepage.php">Cancel</a>
	</form>
	</body>
    </html><?php
}else{    
	//DO NOT SHOW this page
	?>
	<p>Please Login First</p>
    <a href="login.php">Back to Home</a><?php
}
?>