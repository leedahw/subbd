<?php session_start();
include("includes/dbconfig.php");
include("includes/standardheader.html");

if(isset($_SESSION["userId"])){
//homepage.php
//value for userId insert into subscription table 
$userId = $_SESSION["userId"];
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
<body>
<!-- call name of user in welcome message-->    
<?php
$stmt = $pdo->prepare("SELECT * FROM `user` 
                    WHERE `user` . `userId` = '$userId'");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);?>

<h1 id="welcome-msg">Welcome Back, <?php echo($row["fName"]);?>!</h1>

<?php
$stmt2 = $pdo->prepare("SELECT SUM(`cost`) AS sum_cost FROM `subscription` WHERE `userId`= '$userId' GROUP BY `userId`"); 
$stmt2->execute();
$row = $stmt2->fetch(PDO::FETCH_ASSOC);

if (empty($row["sum_cost"])){
    echo ("<h2 class='rem-margin'>");
    echo ("<a href='insert-subb.php' style='float:left;'>");
    echo("Please Add a New Subb");
    echo("</a>");
    echo("</h2>");
}elseif(isset($row["sum_cost"])){
    echo ("<h2 class='rem-margin'>");
    echo("You are currently spending $");
    echo($row["sum_cost"]);
    echo(" per month on subscriptions.");
    echo("</h2>");
}

?>
<br/><br/>
<!-- show donut chart of subbs based on category-->
<section id="full-page">
<div id="breakdown-div">
<h2 id="breakdown-title"> Your Monthly Subbs Breakdown</h2>   
<div class="drop-shadow" id="chart">
<?php include("includes/google-chart.php"); ?>
</div>
</div>


<!-- full list of subbs echoed by referring to Session userId-->
<div class="all-subbs" id="all-subbs">
    <div class="align-items">
        <h2 id="your-subbs">Your Subbs</h2>
        
        <a id="new-subb-button" href="insert-subb.php">
            ADD NEW<i id="addnew" class="fas fa-plus-circle"></i></a>
            </div>    
    <!-- buttons to navigate to view subb by category-->

    <ul id= "category-nav">
        <li><a class="category-link white-text drop-shadow" id="blue-back" href= "productivity-subb.php">PRODUCTIVITY</a></li>
        <li><a class="category-link white-text drop-shadow"  id="pink-back" href= "utility-subb.php">UTILITIES</a></li>
        <li><a class="category-link white-text drop-shadow" id="purple-back" href= "entertainment-subb.php">ENTERTAINMENT</a></li>
    </ul>

<?php
$stmt1 = $pdo->prepare("SELECT * FROM `subscription` 
                    WHERE `subscription` . `userId` = '$userId'");
$stmt1->execute();
while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="drop-shadow" id="indiv-subb">
    <a style="margin-top:.75rem;" class= "link" id="edit-link" href = "edit-subb.php?subId=<?php echo($row["subId"]);?>">EDIT</a>
    <a style="margin-top:.75rem;" class ="link" id="delete-link" href="delete-subb.php?subId=<?php echo($row["subId"]);?>">DELETE</a>
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
    echo("</h3>");?>
</div>
<?php
}
?>
</div>
</section>
<script src="js/modal.js"></script>
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