<?php 
session_start();
include("includes/dbconfig.php");
include("includes/standardheader.html");

if(isset($_SESSION["userId"])){
    $userId = $_SESSION["userId"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="visual subscription manager">
    <meta name="keywords" content="subbd homepage">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Subb'd - Your Personal Subscription Manager</title>
</head>
<?php
    
    $stmt = $pdo->prepare("SELECT * FROM `user` 
                    WHERE `user` . `userId` = '$userId'");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);?>


<body style="margin-left:13rem;margin-right:13rem;">
    <section class="drop-shadow border-radius" id="landing-section" >
    <div>
        <img style="width:500px; margin-bottom:3rem;" src="imgs/hello.jpg"></img>
    </div>
        <div id="landing1" style="padding:2rem;width:fit-content">
            <h1 style="width: 500px; margin-top:0;">Hi There <?php echo ($row["fName"] ." ". $row["lName"]);?>!</h1>
            <p>Email Address: <?php echo $row["emailAddress"]?></p>
            <p>Password: <?php echo $row["password"]?></p>

            <br/>

            <a href="edit-profile.php" class="styled-btn" style="float:left;color:white;">Edit Profile</a>

        </div>
    </section>
</body>
</html>
<?php
}else{
?>
<html>
<body class="gradient-back">
<form class ="drop shadow form">
<h2 style="margin-left:auto; margin-right:auto;">Please Login First</h2>
<a style="margin-left:auto; margin-right:auto;" href = "login.php">Login Here</a>
</form>
</body>
</html>
<?php
}?>