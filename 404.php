<?php
/*
Template Name: 404
*/
wp_head();
?>
<body>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
else :
    echo '<p>Page introuvable.</p>';
endif;
get_footer();
?>