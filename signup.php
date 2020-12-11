<?php
//signup-page.php
include("includes/standardheader.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sign up page for IMM News Network">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>signup page</title>
</head>
<body class="gradient-back">
    <form class ="form" id="thanks" style="display:none;">	
		<p id="message">Welcome! Login in Here! <a href="login.php">Back to Home</a></p>
	</form>

    <form class="drop-shadow" id= "signup-form">
    <h2 class="form-title">SIGN UP</h2>
    <input type= "text" class="form-input" name="fName" id="fName" placeholder= "First Name" required/><br/>
    <br/>
    <input type= "text" class="form-input" name="lName" id="lname" placeholder= "Last Name" required/><br/>
    <br/>
    <input type= "text" class="form-input" name="emailAddress" id="emailAddress" placeholder= "Email Address" required/><br/>
    <br/>
    <input type= "password" class="form-input" name="password" id="password" placeholder= "Password" required/><br/>
    <br/>
    <input type= "submit" id="submit-data"/>
    <a class="form-link" id="login-link" style="color:grey" href ="login.php">Already a member? Login Here!</a>
    </form>
    
</body>
</html>