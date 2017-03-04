<?php get_header() ?>
<main>
    <article>
<?php
   $resp =  customSetPostViews(get_the_ID());

?>

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

                </div>
<?php
        }
    }
 ?>
 <?php
    /*$post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true );
       if ( ! empty( $post_views_count ) ) {
        echo $post_views_count;
    }*/
?>
</article>
</main>


<?php get_footer() ?>