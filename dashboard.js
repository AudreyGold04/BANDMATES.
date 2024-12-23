const swipeableProfile = document.querySelector('.swipeable-profile');

// Example swipe handling
let startX = 0;
let currentTranslate = 0;

swipeableProfile.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
});

swipeableProfile.addEventListener('touchmove', (e) => {
    const deltaX = e.touches[0].clientX - startX;
    currentTranslate += deltaX;
    swipeableProfile.style.transform = `translateX(${currentTranslate}px)`;
});

swipeableProfile.addEventListener('touchend', () => {
    currentTranslate = 0;
    swipeableProfile.style.transform = `translateX(0)`;
});