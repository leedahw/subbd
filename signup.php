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
<body>
    <form action = "process-signup.php" method = "POST">
    First Name: <input type = "text" name ="fName" required/><br/>
    <br/>
    Last Name: <input type = "text" name ="lName" required/><br/>
    <br/>
    Email Address: <input email = "text" name = "emailAddress" required/><br/>
    <br/>
    password: <input type = "password" name = "password" required/><br/>
    <br/>
    <input type = "submit">
    <a class="form-link" id="signup-link" style="color:grey" href ="login.php">Already a member? Login Here!</a>
    </form>
    
</body>
</html>