// Modal Ajouet Employe
var modal = document.querySelector("#modal");
var modalOverlay = document.querySelector("#modal-overlay");
var closeButton = document.querySelector("#close-addButton");
var openButton = document.querySelector("#open-addButton");

// Modal Confirmation supprission
openButton.addEventListener("click", function () {
    modal.classList.toggle("closed");
    modalOverlay.classList.toggle("closed");
});
modalOverlay.addEventListener("click", function () {
    modal.classList.toggle("closed");
    modalOverlay.classList.toggle("closed");
});
closeButton.addEventListener("click", function () {
    modal.classList.toggle("closed");
    modalOverlay.classList.toggle("closed");
});


console.clear();
//var header = document.getElementById("ms-sidebar-body-urls");
//var btns = header.getElementsByClassName(""");
//for (var i = 0; i < btns.length; i++) {
//  btns[i].addEventListener("click", function() {
//  var current = document.getElementsByClassName("ms-active");
//  current[0].className = current[0].className.replace(" ms-active", "");
//  this.className += " ms-active";
//  });
//}


