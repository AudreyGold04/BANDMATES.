document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section'); 
  
    
    const changeBackgroundOnScroll = () => {
      const scrollPosition = window.scrollY + window.innerHeight / 2; 
      sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const sectionTop = rect.top + window.scrollY;
        const sectionBottom = sectionTop + section.offsetHeight;
  
       
        if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
          section.style.backgroundColor = section.dataset.bgColor; 
        }
      });
    };
  
    
    document.addEventListener('scroll', changeBackgroundOnScroll);
    changeBackgroundOnScroll(); 
  });