var sidebar = document.querySelector('.sidebar');
var make = document.createElement('div');
make.className = 'btn';
make.innerHTML = "<span class='bar'></span>";
make.innerHTML += "<span class='bar'></span>";
make.innerHTML += "<span class='bar'></span>";
sidebar.appendChild(make);

document.querySelector('.sidebar .btn').addEventListener('click', function () {
  document.querySelector('.sidebar').classList.toggle('active');
  document.querySelector('main').classList.toggle('active');
});
