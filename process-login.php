<?php
//start session
session_start();
//processing the login
?>
<link rel="stylesheet" href="css/main.css"/>
<?php
//receive input
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];


include('includes/dbconfig.php');


$stmt = $pdo->prepare("SELECT * FROM `user`
WHERE `emailAddress` = '$emailAddress' AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
include("includes/standardheader.html");
if($row){
	//session declarations
	$_SESSION["userId"] =$row["userId"];

	//success login
	?>
	<body class="gradient-back">
	<form class="drop shadow form">
	<p style="margin-left:auto; margin-right:auto;">Welcome Back!</p>
	<a href="homepage.php" style="margin-left:auto; margin-right:auto;">Go to Home</a>
	</form>
</body>
	<?php
}else{
	//incorrect input
	?>
	<body class="gradient-back">
	<form class ="drop shadow form">
	<p style="margin-left:auto; margin-right:auto;">Incorrect username/password.</p>
	<p style="margin-left:auto; margin-right:auto; margin-top:0;">Please Try Again</p>
	<a href = "login.php" style="margin-left:auto; margin-right:auto;">Back to Login</a>
	</form>
	</body>
	<?php
}
?>
