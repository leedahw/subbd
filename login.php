<?php
//login.php
include("includes/standardheader.html");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="login page for subbed">
    <meta name="keywords" content="HTML, PHP, subbd">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Login</title>
</head>
<body>
    <form action = "process-login.php" method = "POST">
    emailAddress: <input id="emailAddress" type="email" name="emailAddress" required/><br/>
    <br/>
    password: <input id="password" type="password" name="password" required/><br/>
    <br/>
    <input id="loginButton" type="submit" value="login">
    </form>

    <a href = "signup.php">Not a member? Sign Up Here!</a>
    
</body>
</html>