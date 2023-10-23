var nav = document.querySelector('.navbar');
var make = document.createElement('div');
make.className = 'hamburger';
make.innerHTML = "<span class='bar'></span>";
make.innerHTML += "<span class='bar'></span>";
make.innerHTML += "<span class='bar'></span>";
nav.appendChild(make);

const foot = document.querySelector('footer');
foot.innerHTML = 'Copyright &copy; 2023, Daffa Fauzul Hakim.';

const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.menu');
hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('active');
  menu.classList.toggle('active');
});
