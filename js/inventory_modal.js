// Get the modal variable
var modan = document.getElementById("invModal");

//The button for adding window
var butn = document.getElementById("myBtnad");

//the span element for closing
var ex = document.getElementsByClassName("shut")[0];

//opening the modal by clicking the button
butn.onclick = function() {
    modan.style.display = "block"
}

ex.onclick = function() {
    modan.style.display = "none";
}

//clicking outside of the modal closing it
window.onclick = function(event) {
    if (event.target == modan) {
        modan.style.display = "none";
    }
}