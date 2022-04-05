
/* Appointment Cards */
/* Hide and Show Feature */
        
function show_hide(){
    var container = document.querySelector('.appointment_container');
    if(container.style.display == "none"){
        container.style.display = "block";
    }
    else{
        container.style.display = "none";
    }
}