const boton = document.querySelector('#btn-navbar');
const menu = document.querySelector('#menu-navbar');
const icon = document.querySelector('#icon-menu');
let navLink = document.querySelectorAll('.nav-link');

boton.addEventListener('click', () => navbar());

navLink.forEach(item => {
    item.addEventListener('click', () => navbar());
})

function navbar() {
    menu.classList.toggle('hidden');
    icon.classList.contains('icon-menu') ? icon.classList.replace('icon-menu', 'icon-cerrar') : icon.classList.replace('icon-cerrar', 'icon-menu');
}

let mainNavLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
    let fromTop = window.scrollY;

    mainNavLinks.forEach(link => {
        let section = document.querySelector(link.hash);
        if (section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
});