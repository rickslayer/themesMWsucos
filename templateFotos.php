<?php /*Template Name: templateFotos*/ ?>
<?php get_header(); ?>
<?php $home = get_template_directory_uri(); ?>

    <!--light-box-files -->
    <script src="<?= $home;?>/js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="<?= $home;?>/css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
    <!--light-box-files -->
    <div class="banner banner5" id="home">

    </div>
    <!--gallery-starts-->
    <div class="gallery">
        <div class="container">
            <div class="gallery-top heading">
                <?php
                $titulo = get_the_title();
                $titulo = strtoupper($titulo);
                $idPost   =  get_the_ID();
                $conteudo   =  get_post_field('post_content', $idPost);
                $conteudo = strip_shortcode_gallery( $conteudo );
                $conteudo = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $conteudo ) );
                ?>
                <h3><?=$titulo; ?></h3>
                <h4 class="text-center"> <?= $conteudo; ?></h4>
            </div>
                <div class="gallery-bottom">
                    <div class="gallery-1">
                        <?php

                        if ( get_post_gallery() ) :
                        $gallery = get_post_gallery( get_the_ID(), false );
                            foreach( $gallery['src'] as $src ) : ?>

                            <div class="col-md-3 gallery-left" style="margin-bottom: 30px;">
                                <a href="<?= $src;?>">
                                    <img class="lazyOwl" src="<?= $src; ?>"  alt="name" />
                                </a>
                            </div>


                            <?php
                                endforeach;
                                 endif;
                            ?>
                          <div class="clearfix"></div>
                  </div>
             </div>
         </div>
    </div>
<script type="text/javascript">
    jQuery(function($){
          $('.gallery-bottom a').Chocolat();
        $("#fotos a").addClass("active");
    });
</script>

<?php get_footer() ?>