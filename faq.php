<?php
/** Template Name: My FAQ Page */
/* get_header();

// Tableau associatif pour stocker les questions et réponses
$faq = [
    "QUI SOMMES NOUS ?" => "Nous sommes une plateforme dédiée aux passionnés de musique.",
    "COMMENT NOUS CONTACTER ?" => "Vous pouvez nous contacter via notre page support.",
    "PUIS-JE UTILISER LA PLATEFORME POUR VENDRE MES SERVICES OU PRODUITS ?" => "Non la plateforme veut promouvoir l'entre-aide et la créativité a but non lucratif.",
    "QUELS SONT LES NIVEAUX ACCEPTÉS ?" => "Tous les niveaux sont acceptés, des débutants aux professionnels."
];
?>

    <main>
        <section class="faq">
<div class="container">

    <?php
    $faqs = new WP_Query([
      'post_type' => 'faqs',
      'post_status' => 'publish'
    ]);

    if ($faqs->have_posts()) :
      $i = 1;
    ?>
      <div class="accordion" id="accordionExample">
        <?php while ($faqs->have_posts()) : $faqs->the_post(); ?>
        <div class="faq-item">
                    <button class="faq-question"><?php the_title(); ?></button>
                    <div class="faq-answer">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
    <?php endwhile; endif; ?>

    </div>
    </section>
    </main>
    

<?php get_footer(); ?>  */ 

<?php
// Tableau contenant les questions et réponses de la FAQ
$faqItems = [
    [
        "id" => "question1",
        "question" => "Quel est l'âge requis pour participer aux activités ?",
        "answer" => "
            <p>Les activités de notre maison des jeunes sont généralement conçues pour les adolescents de 12 à 18 ans.</p>
            <p>Toutefois, certains programmes spécifiques peuvent être adaptés pour des tranches d'âge plus jeunes ou plus âgées.</p>
            <p>Nous encourageons les intéressés à consulter le programme des activités sur notre site web ou à nous contacter directement pour obtenir des informations détaillées sur les restrictions d'âge pour chaque activité.</p>
        "
    ],
    [
        "id" => "question2",
        "question" => "Quelles activités sont proposées à la maison des jeunes ?",
        "answer" => "
            <p>À la maison des jeunes, nous offrons une grande variété d'activités pour répondre à tous les intérêts. Nos programmes incluent des ateliers artistiques comme le dessin, la peinture et le théâtre, des activités sportives telles que le basketball, le soccer et la natation, ainsi que des clubs de musique et de danse.</p>
            <p>Nous organisons également des soirées jeux vidéo, des séances de cinéma, et des ateliers de développement personnel et de leadership. Notre objectif est de fournir un espace sûr et stimulant où chaque jeune peut explorer ses passions et développer de nouvelles compétences.</p>
        "
    ],
    [
        "id" => "question3",
        "question" => "La maison des jeunes offre-t-elle des programmes de soutien scolaire ou d'aide aux devoirs ?",
        "answer" => "
            <p>Oui, nous comprenons l'importance de la réussite scolaire pour les jeunes. C'est pourquoi nous proposons des programmes de soutien scolaire et d'aide aux devoirs plusieurs fois par semaine. Ces séances sont encadrées par des bénévoles compétents et des tuteurs qui aident les jeunes à comprendre leurs leçons, à préparer leurs examens, et à améliorer leurs compétences académiques dans diverses matières.</p>
            <p>Ces programmes sont gratuits pour tous nos membres et visent à offrir un soutien éducatif complémentaire dans un environnement encourageant et positif.</p>
        "
    ],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="FAQ CODE FINAL.css"> <!-- Assurez-vous que ce fichier CSS est bien lié -->
</head>
<body>
<main class='faq'>
    <h1>Questions fréquemment posées</h1>
    <?php foreach ($faqItems as $item): ?>
        <section class="accordion" id="<?= htmlspecialchars($item['id']); ?>">
            <h1 class="title">
                <a href="#<?= htmlspecialchars($item['id']); ?>">
                    <?= htmlspecialchars($item['question']); ?>
                </a>
            </h1>
            <div class="content">
                <div class="wrapper">
                    <?= $item['answer']; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
</main>
</body>
</html>