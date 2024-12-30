const bigNavbar = document.getElementById('big-navbar');
let prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    const currentScrollPos = window.pageYOffset;

    if (window.innerWidth > 768 && bigNavbar) {
        if (prevScrollpos > currentScrollPos) {
            bigNavbar.style.top = "0";
        } else {
            bigNavbar.style.top = "-200px";
        }
    } else {
        bigNavbar.style.top = "-200px";
        bigNavbar.style.display = 'none';
    }
    prevScrollpos = currentScrollPos;
};

function handleNavbarVisibility() {
    if (window.innerWidth <= 768) {
        bigNavbar.style.display = 'none';
    } else {
        bigNavbar.style.display = 'flex';
    }
}

handleNavbarVisibility();

window.addEventListener('resize', handleNavbarVisibility);