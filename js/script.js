// to toggle hamburger menu (i dont understand but its from google)
const hamburger = document.getElementById('hamburger-menu');
const nav = document.querySelector('nav ul');

hamburger.addEventListener('click', () => {
    nav.classList.toggle('nav-active');
});