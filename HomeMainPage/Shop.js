//Hamburger menu
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
})

var a;
//bracelet
function Bracelet() {
    if (a == 1) {
        document.getElementById("bracelet").style.display = "inline";
        return a = 0;
    } else {
        document.getElementById("bracelet").style.display = "none";
        return a = 1;
    }
}
//rings
function Rings() {
    if (a == 1) {
        document.getElementById("rings").style.display = "inline";
        return a = 0;
    } else {
        document.getElementById("rings").style.display = "none";
        return a = 1;
    }
}

//earings
function Earings() {
    if (a == 1) {
        document.getElementById("earings").style.display = "inline";
        return a = 0;
    } else {
        document.getElementById("earings").style.display = "none";
        return a = 1;
    }
}

//nuckless
function Nuckless() {
    if (a == 1) {
        document.getElementById("nuckless").style.display = "inline";
        return a = 0;
    } else {
        document.getElementById("nuckless").style.display = "none";
        return a = 1;
    }
}

//nuckless
function Other() {
    if (a == 1) {
        document.getElementById("other").style.display = "inline";
        return a = 0;
    } else {
        document.getElementById("other").style.display = "none";
        return a = 1;
    }
}