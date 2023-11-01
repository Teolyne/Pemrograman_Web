function toggleTheme() {
    const bodyElem = document.body;

    if (bodyElem.classList.contains('light')) {
        bodyElem.classList.remove('light');
        document.querySelector('.theme-toggle').innerText = 'Light Mode';
    } else {
        bodyElem.classList.add('light');
        document.querySelector('.theme-toggle').innerText = 'Dark Mode';
    }
}

const gweh = document.getElementById('nama')
gweh.style.color = '#129ecb'

var move = document.querySelector('.gerak');
var posisi = 0;

function moveText() {
    posisi += 10;
    move.style.left = posisi + 'px';

    if (posisi >= window.innerWidth) {
        posisi = -move.clientWidth;
    }
    setTimeout(moveText,10);
}

moveText();
