const stepsWrapper = document.querySelector(".steps-wrapper");
const nextBtns = document.querySelectorAll(".btn-continue");
const backBtns = document.querySelectorAll(".btn-back");
let currentStep = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", (event) => {
        event.preventDefault();

        const inputs = stepsWrapper.querySelectorAll(`.profile-container:nth-child(${currentStep + 1}) input:not([type='file'])`);
        let isValid = true;

        inputs.forEach((input) => {
            if (!input.value.trim()) {
                isValid = false;
                input.style.border = "2px solid red";
            } else {
                input.style.border = "1px solid #ccc";
            }
        });

        if (!isValid) return;

        if (currentStep < nextBtns.length) {
            currentStep++;
            stepsWrapper.style.transform = `translateY(-${currentStep * 100}vh)`;
        }
    });
});

backBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            stepsWrapper.style.transform = `translateY(-${currentStep * 100}vh)`;
        }
    });
});

document.getElementById('fileInput').addEventListener('change', function(event) {
  const file = event.target.files[0];
  if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
          const profileImage = document.getElementById('profileImage');
          profileImage.src = e.target.result;
      };
      reader.readAsDataURL(file);
  }
});

document.querySelectorAll("input[type='file']").forEach((input) => {
  input.addEventListener("change", (event) => {
      const file = event.target.files[0];
      if (file) {
          const reader = new FileReader();
          reader.onload = (e) => {
             
              const label = input.closest("label");
              const img = label.querySelector("img");
              const uploadText = label.querySelector(".upload-text");

             
              img.src = e.target.result;
              img.style.display = "block";
              uploadText.style.display = "none";
          };
          reader.readAsDataURL(file);
      }
  });
});

document.getElementById('audioInput').addEventListener('change', function (event) {
  const file = event.target.files[0];
  if (file) {
      const audioPlayer = document.getElementById('audioPlayer');
      const audioSource = document.getElementById('audioSource');

      const fileURL = URL.createObjectURL(file);

      audioSource.src = fileURL;
      audioPlayer.load();

      document.querySelector('.audio-player').style.display = 'block';

      document.querySelector('.audio-upload-label').style.display = 'none';
  }
});
