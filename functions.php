<?php

/*Écrivez ici vos propres fonctions */


//HTML ID "particles-js" for section block html

function enqueue_particles() {
    wp_enqueue_script('particles-cdn', '//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js');
    wp_enqueue_script('particles-js', get_stylesheet_directory_uri() .'/js/particles.js', array('particles-cdn'));
}
add_action('wp_enqueue_scripts', 'enqueue_particles');

//HTML classe "ripples" for section block html
function enqueue_ripples() {
    wp_enqueue_script('ripples-cdn', '//cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js', array('ripples-cdn');
    wp_enqueue_script('ripples',  get_stylesheet_directory_uri() .'/js/ripples.js');
}
add_action('wp_enqueue_scripts', 'enqueue_ripples');


