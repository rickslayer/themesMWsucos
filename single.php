<?php get_header() ?>
<?php $resp =  customSetPostViews(get_the_ID());?>

    <div class="banner banner5" id="home">

    </div>

    <div class="blog">
        <div class="container">
            <div class="blog-head heading">

            </div>
            <div class="blog-top">
                <?php
                if(have_posts()){
                    while (have_posts()) {

                        the_post();
                        ?>
                        <?php
                        $idPost      = get_the_ID();
                        $resp        = get_posts($idPost);
                        $idUser      = $resp[0]->post_author;
                        $user        = get_user_by('ID', $idUser );
                        $link        = get_permalink($idPost);
                        $titulo      = get_the_title();
                        $titulo      = strtoupper($titulo);
                        $comentarios = $resp[0]->comment_count;
                        $categoria   = get_the_category($idpost);
                        $dataPublicacao = $resp[0]->post_date;
                        $dataPublicacao = date("d/m/Y");
                        ?>
                       <div class="col-md-9 blog-left">
                         <div class="blog-main">
                        <a href="single.html" class="bg"><?= $titulo;  ?></a>
                        <p>Postado por <a href="#" title="usuário"><?=$user->user_nicename;?></a>  <?= the_date(); ?>  <a href="#" title="comentários"><?=$comentarios?> comentários</a></p>
                          </div>
                           <div class="blog-main-one">
                               <div class="blog-one">
                                   <?php the_post_thumbnail('medium'); ?>
                                    <p>
                                       <?php the_content() ?>

                                   </p>
                               </div>
                               <div class="blog-comments">
                                   <ul>
                                       <li><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><a href="#" title="categoria"><?= $categoria[0]->cat_name;?></a></li>
                                       <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><p title="data da publicação"> <?= $dataPublicacao; ?></p></li>
                                       <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#" title="usuário"><?=$user->user_nicename;?></a></li>
                                   </ul>
                                   <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="comments">
                               <div class="comments-top heading">
                                   <h3>COMENTÁRIOS</h3>
                               </div>
                               <div class="reply">
                                   <div class="contact-form">
                                <?php
                                $commenter = wp_get_current_commenter();
                                $req = get_option( 'require_name_email' );
                                $aria_req = ( $req ? " aria-required='true'" : '' );
                                $fields =  array(
                                    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                                    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                                        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                                );

                                $comments_args = array(
                                    'fields' =>  $fields
                                );

                                comment_form($comments_args);

                                ?>
                                   </div>
                               </div>

                               <div class="comments-bottom">
                                   <div class="media">
                                       <div class="media-left">
                                           <a href="#">
                                               <img class="media-object" src="images/co.png" alt="" />
                                           </a>
                                       </div>
                                       <div class="media-body">
                                            <ol class="commentlist">
                                               <?php
                                               $args = array(
                                                   'post_id' => get_the_ID(),
                                                   'status' => 'approve'
                                               );
                                               $comments = get_comments($args);

                                               wp_list_comments(array(
                                                   'per_page' => 10,
                                                   'reverse_top_level' => false
                                               ), $comments);
                                               ?>
                                           </ol>


                                           ?>
                                           <div class="media">
                                               <div class="media-left">
                                                   <a href="#">
                                                       <img class="media-object" src="images/co.png" alt="" />
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Curabitur vitae libero</h4>
                                                   <p>Phasellus ut ex eu quam interdum ultrices ac congue nunc. Donec ultricies volutpat purus at rutrum. Suspendisse malesuada ligula eu elit aliquet porttitor. Integer ac magna eget lacus venenatis sagittis id vitae massa.</p>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="media">
                                           <div class="media-left">
                                               <a href="#">
                                                   <img class="media-object" src="images/co.png" alt="">
                                               </a>
                                           </div>
                                           <div class="media-body">
                                               <h4 class="media-heading"><a href="#">Melinda Dee</a></h4>
                                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                   Duis aute irure dolor in reprehenderit .</p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="related">
                               <h3>RELATED POSTS</h3>
                               <div class="related-bottom">
                                   <div class="col-md-3 related-left">
                                       <img src="images/r-1.jpg" alt="" />
                                       <h4>Cum sociis sere</h4>
                                   </div>
                                   <div class="col-md-3 related-left">
                                       <img src="images/r-2.jpg" alt="" />
                                       <h4>Vestibulum est ex</h4>
                                   </div>
                                   <div class="col-md-3 related-left">
                                       <img src="images/r-3.jpg" alt="" />
                                       <h4>Ut tincidunt</h4>
                                   </div>
                                   <div class="col-md-3 related-left">
                                       <img src="images/r-4.jpg" alt="" />
                                       <h4> Aliquam eu quam</h4>
                                   </div>
                                   <div class="clearfix"></div>
                               </div>
                           </div>
                       </div>
                        <div class="col-md-3 blog-right">
                            <div class="categories">
                                <h3>CATEGORIAS</h3>
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
                                <h3>ARCHIVES</h3>
                                <ul>
                                    <li><a href="#">March 3014</a></li>
                                    <li><a href="#">May 2014</a></li>
                                    <li><a href="#">August 2014</a></li>
                                    <li><a href="#">October 2014</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                        </div>
                        </div>









                        <?php
                    }
                }
                ?>


<?php get_footer() ?>