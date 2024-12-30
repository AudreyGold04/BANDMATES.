// const toggleButton = document.querySelector('.menu-toggle');
// const smallScreenNav = document.querySelector('.small-screen .nav');
const bigNavbar = document.getElementById('big-navbar');
// const smallNavbar = document.getElementById('small-navbar');
let prevScrollpos = window.pageYOffset;

// if (toggleButton && smallScreenNav) {
//     toggleButton.addEventListener('click', () => {
//         const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
//         toggleButton.setAttribute('aria-expanded', !isExpanded);
//         smallScreenNav.classList.toggle('active');
//     });
// }

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
    // if (window.innerWidth <= 768 && smallNavbar) {
    //     if (prevScrollpos > currentScrollPos) {
    //         smallNavbar.style.top = "0";
    //     } else {
    //         smallNavbar.style.top = "-200px";
    //     }
    // }
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

// const navLinks = document.querySelectorAll('.small-screen .nav a');
// if (navLinks) {
//     navLinks.forEach(link => {
//         link.addEventListener('click', () => {
//             if (smallScreenNav) {
//                 smallScreenNav.classList.remove('active');
//                 toggleButton.setAttribute('aria-expanded', false);
//             }
//         });
//     });
// }