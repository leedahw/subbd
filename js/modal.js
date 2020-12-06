var modal = document.querySelectorAll("#modal")[0];
var modalContent = document.querySelectorAll("#modal-content")[0];
var button = document.querySelectorAll("#more-button")[0];
var span = document.getElementsByClassName("close")[0];

button.addEventListener("click", openModal, false);

function openModal(event){
    event.preventDefault();
    console.log("open");
    //DOM manipulation
    modal.style.display="block";
    modalContent.style.display="block";
    button.style.display="none";
}

span.addEventListener("click", closeModal,false);

function closeModal(event){
    event.preventDefault();
    console.log("closed");

    //DOM manipulation
    modal.style.display="none";
    modalContent.style.display="none";
    button.style.display="block";
}
