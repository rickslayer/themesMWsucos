<?php
/*
@package themeMWsucos
====================
 ENQUEUE FUNCTIONS
====================
*/
function mwsucos_load_scripts_front(){
      wp_enqueue_style('styleprincipal', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
      wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.4', 'all');
      wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '4.7.0', 'all' );
      wp_enqueue_style('enriqueta', 'http://fonts.googleapis.com/css?family=Enriqueta:400,700' );
      wp_enqueue_style('opensans', 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' );

      wp_enqueue_script('jquery' ,'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js' ,array(), '3.1.1', true);
      wp_enqueue_script('bootstrapjs' ,'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' ,array('jquery'), '3.3.7', true);
      wp_enqueue_script('move-top', get_template_directory_uri() . '/js/move-top.js', array(), '', true );
      wp_enqueue_script('customJs', get_template_directory_uri() . '/js/customJs.js', array(), '', true );
      wp_enqueue_script('easing', get_template_directory_uri() . '/js/easing.js', array(), '', true );


}
 add_action( 'wp_enqueue_scripts', 'mwsucos_load_scripts_front');

