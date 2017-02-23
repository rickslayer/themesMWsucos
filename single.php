<?php get_header() ?>
<main>
    <article>


<?php
    if(have_posts()){
        while (have_posts()) {

            the_post();
             ?>
             <div class="single-post">
             <?php the_post_thumbnail('medium'); ?>
             </div>
             <div class="container">
                <section class="row">
                    <?php the_title() ?>
                </section>
            <section>
                   <?php the_content() ?>
            </section>
                <span>
                    <?php the_date(); ?>
                </span>
                <?php
                     $garotas_meta_data = get_post_meta($post->ID);


                 ?>
                 <dl>
                     <dt>Altura:</dt>
                     <dd><?= $garotas_meta_data['altura_id'][0] ?></dd>

                      <dt>Idade:</dt>
                     <dd><?= $garotas_meta_data['idade_id'][0] ?></dd>

                      <dt>Peso:</dt>
                     <dd><?= $garotas_meta_data['peso_id'][0] ?></dd>
                 </dl>


                </div>
<?php
        }
    }
 ?>
</article>
</main>


<?php get_footer() ?>