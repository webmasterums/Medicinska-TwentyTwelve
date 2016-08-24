<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// hook

add_action('em_event', em_qtranslate, 0, 3);

// qtranslate

function em_qtranslate($target, $arg1=null, $arg2=null, $arg3=null) {
  $target->event_name = em_qtranslate_string($target->event_name);
  $target->event_owner = em_qtranslate_string($target->event_owner);
  $target->post_content = em_qtranslate_string($target->post_content);
}

function em_qtranslate_string($raw_string) {
  if(function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage'))
    $output = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($raw_string);
  else
    $output = __($raw_string);
  return $output;
}?>