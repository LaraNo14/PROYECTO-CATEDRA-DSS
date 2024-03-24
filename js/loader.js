var loader = document.querySelector(".loader");
var container = document.querySelector(".contenedor");

window.addEventListener("load", setTimeout(disappear, 1500), setTimeout(display_loader, 2500));

function disappear() {
    loader.classList.add("disappear");
}

function display_loader() {
    loader.style.display = "none";
    container.style.display = "block";
}