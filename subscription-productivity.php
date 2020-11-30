<?php session_start();
//articles-industry
    include("includes/standardheader.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="index of just Industry-related articles">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network, articles, industry">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Industry Articles</title>
</head>
<body>
    <h2>Industry Articles</h2>
<?php
    //get records from db vv
include("includes/dbconfig.php");


$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'industry'");

$stmt->execute();
while ($row = $stmt->fetch(PDO:: FETCH_ASSOC)){
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

    <a href = "view-article.php?articleId=<?php echo($row["articleId"]);?>">Read More</a><br/>
    <a href = "<?php echo($row["articleLink"]);?>">See Full Article</a><br/>
<?php
}
?>
</body>
</html>
