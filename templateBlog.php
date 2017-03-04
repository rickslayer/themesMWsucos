<?php /*Template Name: templateBlog*/ ?>
<?php get_header(); ?>
 <script type="text/javascript">
    $(function(){
            $("#blog a").addClass("active");
    });
</script>
<div class="banner banner5" id="home"> </div>
    <!--blog-->
    <div class="blog">
        <div class="container">
            <div class="blog-head heading">
                <h3>BLOG MILK WAY - SUCOS NATURAIS</h3>
            </div>
            <div class="blog-top">
               <div class="col-md-9 blog-left">

                                <?php
/*
                                       $idpost   = $key->ID;
                                       $iduser   = $key->post_author;
                                       $conteudo = $key->post_content;
                                       $conteudo = substr($conteudo, 0,600);
                                       $titulo   = $key->post_title;
                                       $titulo   = strtoupper($titulo);
                                       $link     = get_permalink($idpost);
                                       $user     = get_user_by('ID', $iduser );
                                       $categoria = get_the_category($idpost);
                                       $comentarios = $key->comment_count;
                                       $dataPublicacao = $key->post_date;
                                       $dataPublicacao = date("d/m/Y");
*/
                                       ?>
                   <?php
                   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                   $typePost = 'publish';
                   $numeroPost = '5';
                   // the query
                   $the_query = new WP_Query( 'posts_per_page=' .$numeroPost.
                                              '&post_status=' .$typePost.
                                              '&paged=' . $paged );
                   ?>

                   <?php if ( $the_query->have_posts() ) : ?>
                       <?php

                       while ( $the_query->have_posts() ) : $the_query->the_post();
                           ?>
                           <?php
                           $idPost   =  get_the_ID();
                           $resp     = get_posts($idPost);
                           $conteudo = get_the_content();
                           $conteudo = substr($conteudo, 0,600);
                           $titulo   = get_the_title();
                           $titulo   = strtoupper($titulo);
                           $link     = get_permalink($idPost);
                           $comentarios = $resp[0]->comment_count;
                           $idUser      = $resp[0]->post_author;
                           $user        = get_user_by('ID', $idUser );
                           $dataPublicacao = $resp[0]->post_date;
                           $dataPublicacao = date("d/m/Y");
                           ?>




                        <div class="blog-main">
                                    <a href="<?=$link ;?>" class="bg"><?= $titulo; ?></a>
                                       <p><a href="#"><?= $comentarios; ?>  Comentários</a></p>
                        </div>
                        <div class="blog-main-one">
                        <div class="blog-one">
                            <div class="col-md-5 blog-one-left">
                                <a href="<?=$link ;?>"> <?php the_post_thumbnail(); ?></a>
                            </div>
                            <div class="col-md-7 blog-one-left">
                                   <p> <?= $conteudo; ?> ... </p>
                                <div class="b-btn">
                                    <a href="<?=$link ;?>">Leia Mais...</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="blog-comments">
                                <ul>
                                    <li><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><a href="#"><?= $categoria[0]->cat_name; ?></a></li>
                                    <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><p><?= $dataPublicacao; ?></p></li>
                                    <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#"><?= $user->user_nicename; ?></a></li>
                                </ul>
                                <div class="clearfix"></div>
                        </div>
                    </div>



                       <?php endwhile; ?>

                   <?php endif; ?>


                </div>
                <div class="col-md-3 blog-right">
                    <div class="categories">
                        <h2>CATEGORIAS</h2>
                        <ul>
                        <?php
                            $args = array(
                                    'exclude' => 1,
                                    'title_li' =>'',
                                    'use_desc_for_title' => 0
                                              ) ;
                            $categories = wp_list_categories($args);

?>
                        </ul>
                    </div>
                    <div class="categories">
                        <h3>POSTS RECENTES</h3>
                        <ul>
                            <?php
                            $args = array(
                                    'numberposts' => 5,
                                    'offset' => 0,
                                    'category' => 0,
                                    'orderby' => 'post_date',
                                    'order' => 'DESC',
                                    'include' => '',
                                    'exclude' => '',
                                    'meta_key' => '',
                                    'meta_value' =>'',
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'suppress_filters' => true
                                );


                            $recent_posts = wp_get_recent_posts($args);
                                foreach ($recent_posts as $key) {
                                         echo ' <li><a href="'. get_permalink($key["ID"]) .'">'
                                         . $key["post_title"].' </a></li>' ;
                                     }
                                     wp_reset_query();
                            ?>

                        </ul>
                    </div>
                    <div class="categories">
                        <h3>OS MAIS VISITADOS</h3>
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="pagination">
                <nav>
                    <ul class="pager">
                        <li><?= previous_posts_link( 'Anterior', 5 ); ?></li>
                        <li><?= next_posts_link( 'Próxima', 5 ); ?></li>
                    </ul>
                    <?php
                    wp_reset_postdata();
                    ?>
                </nav>
            </div>
        </div>
    </div>
    <!--blog-->

<?php get_footer();?>