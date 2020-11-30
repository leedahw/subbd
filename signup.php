<?php
//signup-page.php
include("includes/standardheader.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sign up page for subbd">
    <meta name="keywords" content="HTML, PHP, IMM, subbd">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Sign Up</title>
</head>
<body>
    <form action = "process-signup.php" method = "POST">
    First Name: <input type = "text" id= "fName" name ="fName" required/><br/>
    <br/>
    Last Name: <input type = "text" id= "lName" name ="lName" required/><br/>
    <br/>
    Email Address: <input email = "text" id= "emailAddress" name = "emailAddress" required/><br/>
    <br/>
    password: <input type = "password" id= "password" name = "password" required/><br/>
    <br/>
    Currency: <input type = "text" id= "currency" name = "currency" required/><br/>

    <input type = "submit" id="signupButton" >
    </form>
    
</body>
</html>