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
<body style="margin-left:13rem;margin-right:13rem;">
    <section class="drop-shadow border-radius" id="landing-section" >
    <div id="document-back">
    </div>
        <div id="landing1" style="padding:2rem;width:fit-content">
            <h1 style="width: 500px; margin-top:0;">SUBB'D is Your One-Stop Hub to Manage Your Subscriptions</h1>
            <p style="width: 500px;">Take control of your subscriptions and see exactly where your money goes every month!</p><br/>
            <a href="signup.php" class="styled-btn" style="float:left;color:white;">Try it Now</a>

        </div>
    </section>

    <section class="drop-shadow border-radius" id="member-section" style="margin-top:3rem;margin-bottom:3rem;">
    <div id="member-back" style="left:3rem;">
    </div>
        <div id="member1" style="padding:2rem;width:fit-content; left:3rem;">
            <h1 style="margin-top:0;">Already A member?</h1>
            <p>Then you know how it works!</p><br/>
            <a href="login.php" class="styled-btn" style="float:left;color:white;">Welcome Back</a>

        </div>
    </section>






<!-- old landing
    <div class="drop-shadow" style="width:fit-content; background-color:white; border-radius:.5rem; margin-left:auto;margin-right:auto
    ;margin-top:13rem;">
    <img src="imgs/logo.png" style="background-color:white;margin-left:5rem;margin-top:3rem;"/></br/>
    <h2 style="margin-left:6rem;">SUBB'D</h2>
    <form id="landing-form" action = "login.php" method ="POST">
    <h4 style="margin-left:auto;margin-right:auto;margin-bottom:.5rem;margin-top:0;color:grey;">Hi There!!</h2>
    <input style="margin-left:auto;margin-right:auto"type = "submit" name= "login" value = "LOGIN">
    </form>
    <form id="landing-form"action = "signup.php" method = "POST">
    <h4 style="margin-left:auto;margin-right:auto;margin-bottom:.5rem;margin-top:0;color:grey;">New User?</h2>
    <input style="margin-left:auto;margin-right:auto"type = "submit" name= "signup" value = "SIGNUP">
    </form>
</div> -->
</body>
</html>