let submitDataEl = document.querySelectorAll("#submit-data")[0];
let form = document.querySelectorAll("#insert-subb-form")[0];
let subName = document.querySelectorAll("#subName")[0];
let category = document.querySelectorAll("#category")[0];
let frequency = document.querySelectorAll("#frequency")[0];
let cost = document.querySelectorAll("#cost")[0];
let currency = document.querySelectorAll("#currency")[0];
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
    
    var requestData = `subName=${subName.value} & category=${category.value} & frequency=${frequency.value} & cost=${cost.value} & currency=${currency.value}`;
    xhr.open("POST", "process-insert-subb.php", true); 
    //true means it is asynchronous 
    // Send variables through the url
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(requestData);

}