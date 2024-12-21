// document.addEventListener('DOMContentLoaded', () => {
//     const sections = document.querySelectorAll('section'); 
  
//     const changeBackgroundOnScroll = () => {
//         const scrollPosition = window.scrollY + window.innerHeight / 2; 
//         sections.forEach(section => {
//             const rect = section.getBoundingClientRect();
//             const sectionTop = rect.top + window.scrollY;
//             const sectionBottom = sectionTop + section.offsetHeight;

//             if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
//                 section.style.backgroundColor = section.dataset.bgColor; 
//             }
//         });
//     };

//     document.addEventListener('scroll', changeBackgroundOnScroll);
//     changeBackgroundOnScroll(); 
// });
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-200px";
  }
  prevScrollpos = currentScrollPos;
}