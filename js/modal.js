var modals= document.querySelectorAll("#modal");
var spans= document.querySelectorAll(".close");
var buttons= document.querySelectorAll(".more-button");


buttons.forEach(button =>{
    button.addEventListener('click', event =>{
        console.log("open");
        openModal();
    });
});

function openModal(event){
for (var i=0; i<modals.length; i++){
    //DOM manipulation
    modals[i].style.display='block';
//     button.style.display='none';
}
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



