<?php session_start();
include("includes/standardheader.html");  
 session_destroy();
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
<body class= "gradient-back">
    <form class="drop-shadow" style="border-radius:.5rem;">
    <p style="margin-left:auto;margin-right:auto;">Logout Successful!</p>
    <a style="margin-left:auto;margin-right:auto;" href="login.php">Back to Login</a>
    </form>
</body>
</html>