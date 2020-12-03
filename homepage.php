<?php session_start();
//homepage.php
include("includes/dbconfig.php");
include("includes/standardheader.html");
//value for userId insert into subscription table 
$userId = $_SESSION["userId"];
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
<!-- call name of user in welcome message-->    
<?php
$stmt = $pdo->prepare("SELECT * FROM `user` 
                    WHERE `user` . `userId` = '$userId'");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);?>

<h1>Welcome Back, <?php echo($row["fName"]);?>!</h1>
<!-- show donut chart of subbs based on category-->

<?php include("includes/google-chart.php"); ?>

<!-- full list of subbs echoed by referring to Session userId-->
<div class="all-subbs" id="all-subbs">
<h2>Your Subbs</h2>
<header>
    <ul>
        <li><a id="new-subb-button" href="insert-subb.php">Add New Subb</a></li>
    </ul>
</header>

<?php
$stmt1 = $pdo->prepare("SELECT * FROM `subscription` 
                    WHERE `subscription` . `userId` = '$userId'");
$stmt1->execute();
while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) { ?>
    <div id="indiv-subb">
    <a class= "link" href = "edit-subb.php?subId=<?php echo($row["subId"]);?>">EDIT</a>
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
    echo("<h3>");
    echo($row["cost"]);
    echo($row["currency"]);
    echo("</h3>");?>

</div><?php
}
?>
</div>

</body>
</html>