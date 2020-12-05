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
<body class="gradient-back">
    <div class="backing">
    <form class="drop-shadow form" id="login-form" action = "process-login.php" method = "POST">
    <h2 class="form-title" id="login-title">LOGIN</h2>
    <input class="form-input" type = "email" name ="emailAddress" placeholder="email address" required/><br/>
    <br/>
    <input class="form-input" type = "password" name = "password" placeholder="password" required/><br/>
    <br/>
    <input class="form-button" type="submit" value="login">
    <a class="form-link" id="signup-link" style="color:grey" href ="signup.php">Not a member? Sign Up Here!</a>
    </form>
    </div>  
    
</body>
</html>