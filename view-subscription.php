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
$articleId = $_GET["articleId"];

//get records from db vv
include("includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `likes`
WHERE `likes` . `userid` = $userId
AND `likes` . `articleId` = $articleId");

$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);?>
<img src ="articles/img/<?php echo($row["likeicon"])?>" width = "50" alt = "likeicon">

<?php 
    $stmt = $pdo->prepare("SELECT count(*) FROM `likes` 
    WHERE `likes` . `articleId` = $articleId");
    
    $stmt->execute();
    $row = $stmt->fetchColumn();
    ?>    

    <p><?php echo $row?> people like this</p>
<!-- like button -->
    <form action = "like.php" method="POST" enctype="multipart/form-data">
    <input type = "hidden" name="articleId" value = "<?php echo($articleId);?>">
    <input type = "hidden" id = "likeicon" name="likeicon" value = "likeicon.png">
    <input type = "submit" name="like" value = "Like"/>
    </form>
<!-- unlike button -->
    <form action = "unlike.php" method="POST" enctype="multipart/form-data">
    <input type = "hidden" name="articleId" value = "<?php echo($articleId);?>">
    <input type = "submit" name="unlike" value = "Unlike"/>
    </form>   

<?php
$stmt = $pdo->prepare("SELECT * FROM `article`
WHERE `articleId` = $articleId");

$stmt->execute();

$row = $stmt->fetch(PDO:: FETCH_ASSOC);?>
    <img src = "uploads/<?php echo($row["img"]);?>" alt="img" width= "600"/><?php
    echo("<h4>");
    echo($row["title"]);
    echo("</h4>");
    echo("<p>");?>
    <label>By: </label><?php
    echo($row["author"]);?><br/>
    <label>Category: </label><?php
    echo($row["category"]);?><br/><br/><?php
    echo($row["content"]);
    echo("</p>");?>

    <a href = "<?php echo($row["articleLink"]);?>" target = "_blank">See Full Article</a><br/>

</body>
</html>