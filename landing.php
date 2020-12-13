<?php
include('includes/standardheader.html');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="landing page for IMM News Network">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network, landing page">
    <meta name="author" content="Alana Dahwoon Lee">
</head>
<body class="gradient-back">
<br/>

<div class="drop-shadow" style="width:fit-content; background-color:white; border-radius:.5rem; margin-left:auto;margin-right:auto;margin-top:13rem;">
    <img src="imgs/logo.png" style="background-color:white;margin-left:5rem;margin-top:3rem;"/></br/>
    <form style="margin-top:0;display:inline-block;width:fit-content;" action = "login.php" method ="POST">
    <h4 style="margin-left:auto;margin-right:auto;margin-bottom:.5rem;color:grey;">Hi There!!</h2>
    <input style="margin-left:auto;margin-right:auto"type = "submit" name= "login" value = "LOGIN">
    </form>
    <form style="margin-top:0rem;display:inline-block;width:fit-content;"action = "signup.php" method = "POST">
    <h4 style="margin-left:auto;margin-right:auto;margin-bottom:.5rem;color:grey;">New User?</h2>
    <input style="margin-left:auto;margin-right:auto"type = "submit" name= "signup" value = "SIGNUP">
    </form>
</div>
</body>
</html>