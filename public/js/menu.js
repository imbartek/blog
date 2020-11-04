const menuBtn = document.querySelector(".menu-btn");

let menuOpen = false;

const menu = document.querySelector('.nav_mobile');

menuBtn.addEventListener("click", () => {
    if (!menuOpen) {
        menuBtn.classList.add("open");
        menu.style.top = "10vh";
        menuOpen = true;
    } else {
        menuBtn.classList.remove("open");
        menu.style.top = "-10vh";
        menuOpen = false;
    }
});
