var modals= document.getElementsByClassName(".modal");
var spans= document.querySelectorAll(".close");
var buttons= document.querySelectorAll(".more-button");

buttons.forEach(button =>{
    button.addEventListener('click', event =>{
        var subId = event.target.getAttribute("data-subId");
        console.log(subId);
            openModal();
    });
});

function openModal(event){
    console.log("opening");
        modals[i].style.display='block';
}

// function closeModal(event){

//     console.log("closed");

//     //DOM manipulation
//     modal.style.display="none";
//     // button.style.display="block";
// }

// buttons.forEach(button =>{
//     span.addEventListener('click', event =>{
//         console.log("close");
//         closeModal();
//     });
// });



