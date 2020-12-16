<?php
//signup-page.php
include("includes/standardheader.html");
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
    <form class ="form" id="thanks" style="display:none;">	
		<p id="message">Welcome!<a href="login.php">Login Here!</a></p>
	</form>

    <form class="drop-shadow" id="signup-form">
    <h2 class="form-title">SIGN UP</h2>
    <input type= "text" class="form-input" name="fName" id="fName" placeholder= "First Name" required/><br/>
    <br/>
    <input type= "text" class="form-input" name="lName" id="lName" placeholder= "Last Name" required/><br/>
    <br/>
    <input type= "text" class="form-input" name="emailAddress" id="emailAddress" placeholder= "Email Address" required/><br/>
    <br/>
    <input type= "password" class="form-input" name="password" id="password" placeholder= "Password" required/><br/>
    <br/>
    <input type= "submit" id="submit-data"/>
    <a class="form-link" id="login-link" style="color:grey" href ="login.php">Already a member? Login Here!</a>
    </form>

<script src="js/signup.js"></script>
</body>
</html>