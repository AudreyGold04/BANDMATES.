document.getElementById('fileInput').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const reader = new FileReader();
  
    reader.onload = function (e) {
      document.getElementById('profileImage').src = e.target.result;
    };
  
    if (file) {
      reader.readAsDataURL(file);
    }
  });
  

  document.querySelector('.profile-form').addEventListener('submit', function (e) {
    e.preventDefault();
  
    const prenom = document.getElementById('prenom').value;
    const nom = document.getElementById('nom').value;
    const anniversaire = document.getElementById('anniversaire').value;
  
    alert(`Prénom : ${prenom}\nNom : ${nom}\nAnniversaire : ${anniversaire}`);
  });