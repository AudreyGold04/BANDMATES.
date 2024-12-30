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
  
      const opacity = pullDeltaX / 1000;
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
          if (!pullDeltaX) return;
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
          if (!pullDeltaX) return;
          release();
        }
  
        document.addEventListener("touchmove", moveHandler);
        document.addEventListener("touchend", endHandler);
      }
    });
  });

  function setupProfileExpansion() {

    document.querySelectorAll('.read-more-btn').forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();

        const card = this.closest('.profile-card');
        const mainContent = document.querySelector('.dashboard');

        const expandedView = document.createElement('div');
        expandedView.className = 'expanded-profile';
        
        const returnButton = `
        <button id="backButton" class="btn-back">←</button>
        `;

        const profileInfo = card.querySelector('.profile-info').cloneNode(true);
        const description = card.querySelector('.profile-description .profile-card-description').cloneNode(true);
        const audioElement = card.querySelector('audio');
        const audioDurationMinutes = Math.trunc(audioElement.duration / 60);
        const audioDurationSeconds = Math.ceil(audioElement.duration % 60);
        const audioPlayer = `
          <div class="audio-player">
            <p>Demo :</p>
            <div class="player-timeline">
              <div class="timeline-progress"></div>
            </div>
            <div class="player-time">
              <span id="current-time">0:00</span>
              <span id="duration">${audioDurationMinutes}:${audioDurationSeconds}</span>
            </div>
            <button class="play-pause-btn">
              <span id="play-icon">▶</span>
              <span id="pause-icon" style="display: none;">▐▐</span>
            </button>
          </div>
        `;
  
        expandedView.innerHTML = `
          ${returnButton}
          ${profileInfo.outerHTML}
          <div class="expanded-description">${description.innerHTML}</div>
          ${audioPlayer}
        `;
  
        const playerContainer = expandedView.querySelector('.audio-player');
        playerContainer.appendChild(audioElement);
  
        mainContent.appendChild(expandedView);

        requestAnimationFrame(() => {
          expandedView.classList.add('active');
          mainContent.classList.add('expanded-view-active');
        });
  
        setupAudioPlayer(audioElement);
  
        expandedView.querySelector('#backButton').addEventListener('click', () => {
          expandedView.classList.remove('active');
          mainContent.classList.remove('expanded-view-active');
          setTimeout(() => expandedView.remove(), 300);
        });
      });
    });
  }
  
  function setupAudioPlayer(audio) {
    const playPauseBtn = document.querySelector('.play-pause-btn');
    const playIcon = document.querySelector('#play-icon');
    const pauseIcon = document.querySelector('#pause-icon');
    const timeline = document.querySelector('.player-timeline');
    const timelineProgress = document.querySelector('.timeline-progress');
    const currentTimeSpan = document.querySelector('#current-time');
    const durationSpan = document.querySelector('#duration');
  
    audio.addEventListener('loadedmetadata', () => {
      durationSpan.textContent = formatTime(audio.duration);
    });
    
    playPauseBtn.addEventListener('click', () => {
      if (audio.paused) {
        audio.play();
        playIcon.style.display = 'none';
        pauseIcon.style.display = 'inline';
      } else {
        audio.pause();
        playIcon.style.display = 'inline';
        pauseIcon.style.display = 'none';
      }
    });
    
    audio.addEventListener('timeupdate', () => {
      const progressPercent = (audio.currentTime / audio.duration) * 100;
      timelineProgress.style.width = `${progressPercent}%`;
      currentTimeSpan.textContent = formatTime(audio.currentTime);
    });
  
    timeline.addEventListener('click', (e) => {
      const timelineWidth = timeline.offsetWidth;
      const clickX = e.offsetX;
      audio.currentTime = (clickX / timelineWidth) * audio.duration;
    });
    
    audio.addEventListener('ended', () => {
      playIcon.style.display = 'inline';
      pauseIcon.style.display = 'none';
      timelineProgress.style.width = '0%';
      currentTimeSpan.textContent = '0:00';
    });
    
    function formatTime(seconds) {
      const minutes = Math.floor(seconds / 60);
      const secs = Math.floor(seconds % 60);
      return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
    }
  }
  
  document.addEventListener('DOMContentLoaded', setupProfileExpansion);
