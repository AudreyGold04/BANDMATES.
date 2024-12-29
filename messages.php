<?php
define('WP_USE_THEMES', false);
echo 'Chemin actuel du fichier : ' . __DIR__;

require_once('../../../wp-load.php');

if (function_exists('bp_better_messages')) {
    echo do_shortcode('[bp-better-messages]');
} else {
    echo 'Le plugin Better Messages n’est pas actif ou installé.';
}
?>