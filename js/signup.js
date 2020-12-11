let submitDataEl = document.querySelectorAll("#submit-data")[0];
let form = document.querySelectorAll("#signup-form")[0];
let fName = document.querySelectorAll("#fName")[0];
let lName = document.querySelectorAll("#lName")[0];
let emailAddress = document.querySelectorAll("#emailAddress")[0];
let password = document.querySelectorAll("#password")[0];
let thanks = document.querySelectorAll("#thanks")[0];



submitDataEl.addEventListener('click', submitDataEv,false);

function submitDataEv(event){
    event.preventDefault();
    console.log(subName.value); //check to see if it's working

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
    
    var requestData = `fName=${fName.value} & lName=${lName.value} & emailAddress=${emailAddress.value} & password=${password.value}`;
    xhr.open("POST", "process-signup.php", true); 
    //true means it is asynchronous 
    // Send variables through the url
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(requestData);

}