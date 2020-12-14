<?php 
session_start();
include("includes/dbconfig.php");
include("includes/standardheader.html");

if(isset($_SESSION["userId"])){


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