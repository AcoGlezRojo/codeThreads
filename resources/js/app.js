import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    //burger menus
    let burger = document.getElementById('navbar-burger');
    let menu = document.getElementById('navbar-menu');

    //listener for burguer menu
    burger.addEventListener('click', function () {
        menu.classList.toggle('hidden');
    });
});