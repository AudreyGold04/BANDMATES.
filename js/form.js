const eye_icon = document.getElementById("eye_icon");
const eye_icon2 = document.getElementById("eye_icon2");
const password_input = document.getElementById("password_input");

eye_icon2.style.display = 'none';

eye_icon.onclick = function () {
    if (password_input.type === "password") {
        password_input.type = "text";
        eye_icon.style.display = "none";
        eye_icon.style.zIndex = 0;
        eye_icon2.style.display = "block";
        eye_icon2.style.zIndex = 10;
    }
};

eye_icon2.onclick = function () {
    if (password_input.type === "text") {
        password_input.type = "password";
        eye_icon2.style.display = "none";
        eye_icon2.style.zIndex = 0;
        eye_icon.style.display = "block";
        eye_icon.style.zIndex = 10;
    }
};

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
            if (!(input.type === 'hidden') && !input.value.trim()) {
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

document.querySelectorAll('.inactive').forEach((button) => {
    button.addEventListener('click', () => {
        const container = button.closest('.profile-container');
        const hiddenInput = container.querySelector('input[type="hidden"]');

        if (hiddenInput) {
            hiddenInput.value = button.getAttribute('data-value');
        }

        container.querySelectorAll('.inactive').forEach((btn) => {
            btn.style.backgroundColor = '';
        });

        button.style.backgroundColor = '#b3ff66';
    });
});

document.querySelectorAll('.inactive_2').forEach((button) => {
    button.addEventListener('click', () => {
        const container = button.closest('.profile-container');
        const hiddenInputs = container.querySelectorAll('input[type="hidden"]');

        const buttonValue = button.getAttribute('data-value');
        let valueSet = false;

        hiddenInputs.forEach((hiddenInput) => {
            if (hiddenInput.value === buttonValue) {
                hiddenInput.value = '';
                valueSet = true;
                button.style.backgroundColor = '';
            }
        });

        if (!valueSet) {
            hiddenInputs.forEach((hiddenInput) => {
                if (!hiddenInput.value && !valueSet) {
                    hiddenInput.value = buttonValue;
                    valueSet = true;
                    button.style.backgroundColor = '#b3ff66';
                }
            });
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
