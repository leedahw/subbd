<?php session_start();
//homepage.php

include("includes/dbconfig.php");
include("includes/standardheader.html");

$userId = $_SESSION["userId"];
//value for userId insert into subscription table 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="home page/ dashboard for subbd">
    <meta name="keywords" content="subbd homepage">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Subb'd</title>
</head>
<body>
<h1>Welcome Back!</h1>

<h2>Your Subbs</h2>
<header>
    <ul>
        <li><a id="new-subb-button" href="insert-subb.php">New Subb</a></li>
    </ul>
</header>

<?php
$stmt = $pdo->prepare("SELECT * FROM `subscriptions` 
                    WHERE `subId` . `userId` = $userId");
$stmt->execute();
while ($row = $stmt->fetch(PDO:: FETCH_ASSOC)){

    echo ($row["subId"]);
}
?>

</body>
</html>