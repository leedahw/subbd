<?php
//login.php
include("includes/standardheader.html");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="login page for IMM News Network">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network">
    <meta name="author" content="Alana Dahwoon Lee">
</head>
<body>
    <form action = "process-login.php" method = "POST">
    emailAddress: <input type = "email" name ="emailAddress" required/><br/>
    <br/>
    password: <input type = "password" name = "password" required/><br/>
    <br/>
    <input type = "submit" value="login">
    </form>

    <a href = "signup.php">Not a member? Sign Up Here!</a>
    
</body>
</html>