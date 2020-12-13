<?php session_start();
include("includes/standardheader.html");
//delete article
if(isset($_SESSION["userId"])){
//show page
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page to confirm deletion of article">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network, delete article">
    <meta name="author" content="Alana Dahwoon Lee">
</head>
<body class="gradient-back">
<?php   
//receive GET variable
$subId = $_GET["subId"];
    

	include('includes/dbconfig.php');
    
    $stmt = $pdo->prepare("SELECT * FROM `subscription` 
        WHERE `subId` = $subId");
    
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //show a form with prefilled info     ?>
    <form id="thanks" style="display:none;">	
		<p id="message">Subb Deleted. <a href="homepage.php">Back to Home</a></p>
	</form>
    
<form id="delete-subb-form" class="drop-shadow" style="width:fit-content">
    <h2 style="margin-bottom:2rem;">Are you sure you want to delete the following Subb?</h2>
    <div class="drop-shadow" style="background-color:#e8e8e8;border-radius:.5rem;padding:1rem;margin-bottom:2rem;">
    <h3><?php echo($row["subName"]);?></h3>
    <p id="category"><?php echo($row["category"]);?></p>
    <p id="frequency"><?php echo($row["frequency"]);?></p>
    <h3 id="money"><?php echo($row["cost"]." ");?> <?php echo($row["currency"]);?></h3> 
    <input type="hidden" id="subId" name="subId" value="<?php echo($row["subId"]);?>">
    </div>
    <input class="drop-shadow btn" type="submit" id="submit-data" value="CONFIRM DELETE" />
    <a id="cancel" href="homepage.php">Cancel</a>
</form>
    <script>
        let submitDataEl = document.querySelectorAll("#submit-data")[0];
        let form = document.querySelectorAll("#delete-subb-form")[0];
        let subId = document.querySelectorAll("#subId")[0];
        let thanks = document.querySelectorAll("#thanks")[0];

        submitDataEl.addEventListener('click', submitDataEv,false);

        function submitDataEv(event){
            event.preventDefault();
            console.log(subId.value); //check to see if it's working

            var xhr = new XMLHttpRequest(); 
            xhr.onreadystatechange = function(e){     
                console.log(xhr.readyState);     
                if(xhr.readyState === 4){        
                    console.log("CHECK DB TABLE");// modify or populate html elements based on response.
                } 
                //DOM manipulation
                form.remove();
                thanks.style.display = 'block';
                submitDataEl.removeEventListener("click", submitDataEv, false);

            };
            
            var requestData = `subId=${subId.value}`;
            xhr.open("POST", "process-delete-subb.php", true); 
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
    //block access?>
<body class="gradient-back">
<form class ="drop shadow form">
<h2 style="margin-left:auto; margin-right:auto;">Please Login First</h2>
<a style="margin-left:auto; margin-right:auto;" href = "login.php">Login Here</a>
</form>
</body>
<?php
}
?>
