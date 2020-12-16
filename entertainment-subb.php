<?php session_start();
//view-article.php
    include("includes/standardheader.html");
if(isset($_SESSION["userId"])){?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="visual subscription manager">
    <meta name="keywords" content="subbd homepage">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Subb'd - Your Personal Subscription Manager</title>
</head>
<body>
<section id ="full-page">
<h1 class="subb-title"> Entertainment Subbs</h1>
<div id="cat-subb">

<?php
$userId = $_SESSION["userId"];

//get records from db vv
include("includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `subscription`
WHERE `subscription`.`userId` = $userId AND `subscription`.`category`= 'entertainment'");

$stmt->execute();

while($row = $stmt->fetch(PDO:: FETCH_ASSOC)){
    echo("<div class='purple-back drop-shadow' id=view-subbs>");?>
    <a style="margin-top:.75rem; color:white;" id="edit-link" href = "edit-subb.php?subId=<?php echo($row["subId"]);?>">EDIT</a>
    <a style="margin-top:.75rem; color:white;" id="delete-link" href="delete-subb.php?subId=<?php echo($row["subId"]);?>">DELETE</a>
    <?php
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
    echo("</h3>");
    echo("</div>");
}?>
</div>
</section>
</body>
</html>
<?php
}else{
?>
    
<body class="gradient-back">
<form class ="drop shadow form">
<h2 style="margin-left:auto; margin-right:auto;">Please Login First</h2>
<a style="margin-left:auto; margin-right:auto;" href = "login.php">Login Here</a>
</form>
</body>
    
<?php
}?>