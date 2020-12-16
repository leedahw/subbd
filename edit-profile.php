<?php session_start();
include('includes/standardheader.html');
if($_SESSION["userId"]){
//if logged in then show this page
   $userId = $_SESSION["userId"];?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="visual subscription manager">
    <meta name="keywords" content="subbd homepage">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Subb'd - Your Personal Subscription Manager</title>
</head>
<?php        
//connect to db
	include("includes/dbconfig.php");
    
    //get user information.ereference session userId
    $stmt = $pdo->prepare("SELECT * FROM `user` 
    WHERE `user` . `userId` = $userId");

    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<body class="gradient-back">    
    <form id="thanks" style="display:none;">	
		<p id="message">Profile Updated. <a href="view-profile.php">Back to Profile</a></p>
	</form>

    <form class="drop-shadow" id="editProfile" style="width:fit-content">
    <h2 class="form-title" style="margin-bottom:1rem;">Edit Profile</h2>
    <h3>First Name:
        <input type="text" name="fName" id="fName" value="<?php echo ($row["fName"]);?>"></h3>
    <h3>Last Name:
        <input type="text" name="lName" id="lName" value="<?php echo($row["lName"]);?>"></h3>
    <h3>Email:    <input style="float:right;" type="text" name="emailAddress" id="emailAddress" value="<?php echo ($row["emailAddress"]);?>"></h3>
    <h3>Password: <input style="float:right;" type="text" name="password" id="password" value="<?php echo($row["password"]);?>"></h3>

    <input type="submit" id="update-data" value="Confirm Edit" style="margin-top:1rem;">
    </form>

    <script>
    let updateData = document.querySelectorAll("#update-data")[0];
    let form = document.querySelectorAll("#editProfile")[0];
    let firstName = document.querySelectorAll("#fName")[0];
    let lastName = document.querySelectorAll("#lName")[0];
    let emailAddress = document.querySelectorAll("#emailAddress")[0];
    let password = document.querySelectorAll("#password")[0];
    let thanks = document.querySelectorAll("#thanks")[0];

    console.log(firstName);

    updateData.addEventListener('click', updateDataEv, false);

    function updateDataEv(event){
        event.preventDefault();
        console.log(fName.value); //check to see if it's working

        var xhr = new XMLHttpRequest(); 
        xhr.onreadystatechange = function(e){     
            console.log(xhr.readyState);     
            if(xhr.readyState === 4){        
                console.log("CHECK DB TABLE");// modify or populate html elements based on response.
            } 
            //DOM manipulation
            form.style.display= 'none';
            thanks.style.display = 'block';

        };
        
        var requestData = "fName="+fName.value+"&lName="+lName.value+"&emailAddress="+emailAddress.value+"&password="+password.value;
        console.log(requestData);
        xhr.open("POST", "process-edit-profile.php", true); 
         console.log(requestData);
        //true means it is asynchronous 
        // Send variables through the url
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(requestData);

    }
    </script>
</body>
</html>


<?php
}else{
?>
<p>Please Login First</p>
<a href = "homepage.php">Back to Home</a><?php


}
?>