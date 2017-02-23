<?php get_header(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sobre o Milk Way Sucos</title>
</head>
<body>
<div class="container">
    <div class="row">
    <?php
       if(have_posts()) {
         while(have_posts()){
                the_post();
                ?>
        <?php the_title(); ?>
        <?php the_content(); ?>

    <?php
         }


       }
 ?>


    </div>

</div>
</body>
</html>




<?php get_footer(); ?>