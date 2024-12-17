<?php get_header(); ?>

c<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BandMates</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div>
          <img class="logo" src="images/black white Thunder logo.svg">
        </div>
        <div class="nav">
          <button class="btn faq">FAQ</button>
          <button class="btn support">Support</button>
        </div>
      </header>
      
      <section class="hero" data-bg-color="black">
        <div class="content">
          <h1>La musique vous réunit, BandMates vous connecte</h1>
          <div class="buttons">
            <a href="formulaire-inscription.html" class="btn join">Rejoindre</a>
              
            <button class="btn login">Se connecter</button>
          </div>
        </div>
        <div class="image-container">
          <img src="images/image-acceuil.png" alt="Musiciens">
        </div>
      </section>
    
      <section class="white-section" data-bg-color="#E5E5E5">
        <h2>Trouvez des musiciens compatibles avec vous.</h2>
        <img class="musiciens-compatibles"  src="images/musiciens.png" alt="Groupe de musiciens">
      </section>
    
      <section class="black-section" data-bg-color="black">
        <h2>Formez votre groupe parfait</h2>
        <p>
          Trouvez des musiciens qui vibrent comme vous. Formez votre groupe, partagez votre passion et jouez ensemble.
        </p>
        
        <img class="chanteuse" src="images/chanteuse.png" alt="Chanteuse">
      </section>
    
      <section class="features" data-bg-color="#E5E5E5">
        <h2>Pourquoi BandMates ?</h2>
        <div class="feature-cards">
          <div class="card">
            <h3>Des connexions sur mesure</h3>
            <p>Trouvez des musiciens partageant vos influences et styles préférés.</p>
          </div>
          <div class="card">
            <h3>Formez votre groupe parfait</h3>
            <p>Rassemblez votre équipe pour connecter les musiciens qui s’harmonisent avec vous.</p>
          </div>
          <div class="card">
            <h3>Une communauté engagée</h3>
            <p>Échangez des idées et collaborez avec d'autres artistes passionnés.</p>
          </div>
        </div>
      </section>
    
      <section class="cta" data-bg-color="black">
        <h2>C'est le moment de passer à l'action</h2>
        <p>Faites le premier pas aujourd’hui et transformez votre rêve en réalité.</p>
        <button class="btn join">Rejoignez gratuitement</button>
        <img class="bouche" src="images/bouche.png"
      </section>
  <script src="script.js"></script>
</body>
</html>

<?php get_footer(); ?>