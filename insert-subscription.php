<?php
session_start();
include('includes/standardheader.html');
if($_SESSION["userId"]){
//allowed to see this page
//insert-article.php
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="form to insert article content">
    <meta name="keywords" content="HTML, PHP, subbd, form, insert">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Add New Article</title>
</head>
<body>
	<form action="process-insert-subscription.php" method="POST" enctype = "multipart/form-data">
		Image: <input type="file" name="img" id="img" required/><br/><br/>
		Company: <input type="text" name="company" required/><br/><br/>
		Category: <select name="category" id="category">
			<option value = "entertainment">Entertainment</option>
			<option value = "productivity">Productivity</option>
			<option value = "utilities">Utilities</option>
			</select><br/><br/>
		Frequency: <select name="frequency" id="frequency">
			<option value = "weekly">Weekly</option>
			<option value = "monthly">Monthly</option>
			<option value = "yearly">yearly</option>
			</select><br/><br/>
		</select><br/><br/>
		<input type="submit" value = "Submit" />
	</form>
	</body>
    </html><?php
}else{    
	//DO NOT SHOW this page
	?>
	<p>Please login and try again</p>
    <a href="homepage.php">Back to Home</a><?php
}
?>