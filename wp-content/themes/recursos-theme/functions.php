<?php 

//LOAD CSS
function load_css_styles(){
  if (!is_admin()){
    wp_register_style('css_main', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('css_main');
  }// if not admin ends
}// css_styles ends

add_action('wp_enqueue_scripts', 'load_css_styles');

?>