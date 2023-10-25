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

const popup = document.getElementById("popup");
const closeBtn = document.getElementById("close-btn");

setTimeout(() => {
    popup.style.display = "block";
}, 3000);  

closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
});


