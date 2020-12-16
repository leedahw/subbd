<?php
session_start(); //session
include('includes/standardheader.html');
include('includes/dbconfig.php');

if(isset($_SESSION["userId"])){

$userId= $_SESSION["userId"]; 
//allowed to see this page ig logged in correctly
//insert-article.php
?>
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
	<form id="thanks" style="display:none;">	
		<p id="message">New Subb Added. <a href="homepage.php">Back to Home</a></p>
	</form>

	<form class="drop-shadow" id="insert-subb-form">
	<h2 class="form-title">Add New Subb</h2>
		<h3>Subb Name: <input type="text" id="subName" name="subName" required/><h3>
		<div id="radio-buttons">
		<h3 id="category-label">Category:</h3>	
			<label><input type="radio" id="category" name="category" value="entertainment"/>entertainment</label>		
			<label><input type="radio" id="category" name="category" value="productivity"/>productivity</label>
			<label><input type="radio" id="category" name="category" value="utilities"/>utilities</label>		
		</div>
		<h3>Frequency: <select name="frequency" id="frequency">
			<option id="frequency" value = "weekly">weekly</option>
			<option id="frequency" value = "monthly">monthly</option>
			<option id="frequency" value = "yearly">yearly</option>
			</select></h3>
		<h3>Cost: $ <input type= "number" step= "0.01" id="cost" name="cost"/> <input type="text" id="currency" name="currency" value="CAD"/></h3>
		<br/>
		<input class="btn drop-shadow" type="submit" id="submit-data" value= "submit"/>
		<a id="cancel" href="homepage.php">Cancel</a>

	</form>

	<script src="js/insert-subb.js"></script>
	</body>
    </html><?php
}else{    
	//DO NOT SHOW this page
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