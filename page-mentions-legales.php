<?php
/*
Template Name: Mention légale
*/
wp_head();?>

<div class="font-officiel" style="font-family: 'Abel', sans-serif !important;">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    else :
        echo '<p>Page introuvable.</p>';
    endif;
    ?>
</div>
<?php
get_footer();
?>