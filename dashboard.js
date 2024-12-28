// const swipeableProfile = document.querySelector('.swipeable-profile');


// let startX = 0;
// let currentTranslate = 0;

// swipeableProfile.addEventListener('touchstart', (e) => {
//     startX = e.touches[0].clientX;
// });

// swipeableProfile.addEventListener('touchmove', (e) => {
//     const deltaX = e.touches[0].clientX - startX;
//     currentTranslate += deltaX;
//     swipeableProfile.style.transform = `translateX(${currentTranslate}px)`;
// });

// swipeableProfile.addEventListener('touchend', () => {
//     currentTranslate = 0;
//     swipeableProfile.style.transform = `translateX(0)`;
// });

document.addEventListener("DOMContentLoaded", function() {
    let animating = false;
    let cardsCounter = 0;
    const numOfCards = 6;
    const decisionVal = 80;
    let pullDeltaX = 0;
    let deg = 0;
    let card, cardReject, cardLike;
  
    function pullChange() {
      animating = true;
      deg = pullDeltaX / 10;
      card.style.transform = `translateX(${pullDeltaX}px) rotate(${deg}deg)`;
  
      const opacity = pullDeltaX / 100;
      const rejectOpacity = opacity >= 0 ? 0 : Math.abs(opacity);
      const likeOpacity = opacity <= 0 ? 0 : opacity;
      cardReject.style.opacity = rejectOpacity;
      cardLike.style.opacity = likeOpacity;
    }
  
    function release() {
      if (pullDeltaX >= decisionVal) {
        card.classList.add("to-right");
      } else if (pullDeltaX <= -decisionVal) {
        card.classList.add("to-left");
      }
  
      if (Math.abs(pullDeltaX) >= decisionVal) {
        card.classList.add("inactive");
  
        setTimeout(() => {
          card.classList.add("below");
          card.classList.remove("inactive", "to-left", "to-right");
          cardsCounter++;
          if (cardsCounter === numOfCards) {
            cardsCounter = 0;
            document.querySelectorAll(".profile-card").forEach(card => {
              card.classList.remove("below");
            });
          }
        }, 300);
      } else {
        card.classList.add("reset");
      }
  
      setTimeout(() => {
        card.style.transform = "";
        card.classList.remove("reset");
        card.querySelector(".profile-card-choice.m--reject").style.opacity = "";
        card.querySelector(".profile-card-choice.m--like").style.opacity = "";
  
        pullDeltaX = 0;
        animating = false;
      }, 300);
    }
  
    document.addEventListener("mousedown", function(e) {
      if (e.target.closest(".profile-card:not(.inactive)")) {
        if (animating) return;
  
        card = e.target.closest(".profile-card");
        cardReject = card.querySelector(".profile-card-choice.m--reject");
        cardLike = card.querySelector(".profile-card-choice.m--like");
        const startX = e.pageX;
  
        function moveHandler(e) {
          const x = e.pageX;
          pullDeltaX = x - startX;
          if (!pullDeltaX) return;
          pullChange();
        }
  
        function endHandler() {
          document.removeEventListener("mousemove", moveHandler);
          document.removeEventListener("mouseup", endHandler);
          if (!pullDeltaX) return; // Empêche les clics rapides
          release();
        }
  
        document.addEventListener("mousemove", moveHandler);
        document.addEventListener("mouseup", endHandler);
      }
    });
  
    document.addEventListener("touchstart", function(e) {
      if (e.target.closest(".profile-card:not(.inactive)")) {
        if (animating) return;
  
        card = e.target.closest(".profile-card");
        cardReject = card.querySelector(".profile-card-choice.m--reject");
        cardLike = card.querySelector(".profile-card-choice.m--like");
        const startX = e.touches[0].pageX;
  
        function moveHandler(e) {
          const x = e.touches[0].pageX;
          pullDeltaX = x - startX;
          if (!pullDeltaX) return;
          pullChange();
        }
  
        function endHandler() {
          document.removeEventListener("touchmove", moveHandler);
          document.removeEventListener("touchend", endHandler);
          if (!pullDeltaX) return; // Empêche les clics rapides
          release();
        }
  
        document.addEventListener("touchmove", moveHandler);
        document.addEventListener("touchend", endHandler);
      }
    });
  });