var nav = document.querySelector('.navbar'),
  make = document.createElement('div');
make.className = 'hamburger';
make.innerHTML = "<span class='bar'></span>";
make.innerHTML += "<span class='bar'></span>";
make.innerHTML += "<span class='bar'></span>";
nav.appendChild(make);
const foot = document.querySelector('footer');
foot.innerHTML = 'Copyright &copy; 2022, Daffa Fauzul Hakim.';
const hamburger = document.querySelector('.hamburger'),
  menu = document.querySelector('.menu');
hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('active'), menu.classList.toggle('active');
});
