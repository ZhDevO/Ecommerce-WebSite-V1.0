const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
var counter = 1;

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
})


document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}))

setInterval(function() {
    document.querySelector('#radio' + counter).checked = true;
    counter++;
    if(counter > 4) {
        counter = 1;
    }
}, 2500);


