let navServicio = document.getElementById("nav-servicios");
let navContactanos = document.getElementById("nav-contactanos");

document.getElementById("nav-servicios").addEventListener("click", function( event ) {
    navServicio.classList.add('active');
    navContactanos.classList.remove('active');

}, false);

document.getElementById("nav-contactanos").addEventListener("click", function( event ) {
    navContactanos.classList.add('active');
    navServicio.classList.remove('active');
}, false);

document.getElementById("nav-header").addEventListener("click", function( event ) {
    navContactanos.classList.remove('active');
    navServicio.classList.remove('active');
}, false);
