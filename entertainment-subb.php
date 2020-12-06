<?php session_start();
//view-article.php
    include("includes/standardheader.html");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="article page for IMM News Network">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network, article page">
    <meta name="author" content="Alana Dahwoon Lee">
</head>
<body>

<?php
$userId = $_SESSION["userId"];
$subId = $_GET["subId"];

//get records from db vv
include("includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `subscription`
WHERE `subId` = $subId AND `userId` = '$userId' AND `category`= 'entertainment'");

$stmt->execute();

$row = $stmt->fetch(PDO:: FETCH_ASSOC);
    echo("<h3>");
    echo($row["subName"]);
    echo("</h3>");
    echo("<p id=category>");
    echo($row["category"]);
    echo("</p>");
    echo("<p id=frequency>");
    echo($row["frequency"]);
    echo("</p>");
    echo("<h3 id= money>");
    echo($row["cost"] );
    echo(" ");
    echo($row["currency"]);
    echo("</h3>");?>
</body>
</html>