<?php

require get_template_directory() . '/core/enqueue.php';
add_theme_support('post-thumbnails');

function getHome()
{
    $resp  =  get_template_directory_uri();

    return $resp;
}

function geraTitle()
    {
      bloginfo(name);
    if(!is_home())
         echo ' | ';

         the_title();

    }

function getDadosPostInterno($slug)
{
    $slug = $slug;
    $args = array (
        'name' => $slug,
        'post_type'   => 'post',
        'post_status' => 'private',
        'numberposts' => 1
        );
    $postInterno = get_posts($args);

    return $postInterno;
}
/*
 * Set post views count using post meta//functions.php
 */
function customSetPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
function strip_shortcode_gallery( $content ) {
    preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if( false !== $pos ) {
                    return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
                }
            }
        }
    }

    return $content;
}

/*MOSTRAR POSTS RANDOMICOS*/
function wpb_rand_posts() {

    $args = array(
        'post_type' => 'post',
        'orderby'	=> 'rand',
        'posts_per_page' => 4,
    );

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $string = "<div class=\"col-md-3 related-left\">
                       <a href=\"". get_permalink() . "\">
                        <img src=\"". get_the_post_thumbnail_url()."\">
                       <h4>". get_the_title() ."</h4>
                       </a>
                       </div>";

        }
        wp_reset_postdata();
    } else {

        $string = 'Sem posts encontrados';
    }

    return $string;
}
function wpa85791_category_posts_per_page( $query ) {
    if ( $query->is_category() && $query->is_main_query() )
        $query->set( 'posts_per_page', 5 );
}
add_action( 'pre_get_posts', 'wpa85791_category_posts_per_page' );

function tag_posts_per_page($query){
    if($query->is_tag()&& $query->is_main_query() )
        $query->set( 'posts_per_page', 5 );
}
add_action( 'pre_get_posts', 'tag_posts_per_page' );

//SELECT PERSONALIZADO

function getViaSelect($args=array()){

    global $wpdb;
    $tabela = $args['tabela'];
    $campo  = $args['campo'];
    $valor  = $args['valor'];

        $cSQL = "SELECT ".$tabela.".*";
        $cSQL .=  " FROM ".$tabela;
        $cSQL .= " WHERE " .$tabela.".".$campo;
        $cSQL .= " IN (";
            foreach($valor as $value)
            {
                 $cSQL .= "'$value '".",";
            }
    $cSQL .= "'')";

        $resp = $wpdb->get_results($cSQL, OBJECT);

       return $resp;
}

function getDados()
{
    $teste = $_GET['test'];
    die(print_r($teste, true));
}
















?>