//get the modal id
var quanbar = document.getElementById("QuantityWindow");

//button id
//var select = document.getElementsByClassName("addbuttn");
var select = document.getElementById("addremove");

//get the span
var exit = document.getElementsByClassName("disable")[0];

function SelectClick() {
    quanbar.style.display = "block";
}
select.onclick = function() {
    quanbar.style.display = "block";
} 

exit.onclick = function() {
    quanbar.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == quanbar) {
        quanbar.style.display = "none";
    }
}