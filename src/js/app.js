document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
});


function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
     const navegacion = document.querySelector('.navegacion');
     const login = document.querySelector('.login');

     navegacion.classList.toggle('mostrar')
     login.classList.toggle('mostrar')
}