<?php /*Template Name: templateInvente*/ ?>
<?php get_header(); ?>
<script type="text/javascript">
    $(function(){
        $("#invente a").addClass("active");
    });
</script>
<div class="banner banner5" id="home"> </div>
<div class="contact">
    <div class="container">
        <div class="blog-head heading">
            <h3><?=the_title();?></h3>
            <p></p>
        </div>
        <div class="contact-top">
<div class="contact-bottom">
    <div class="col-md-8 contact-right">
        <?php echo do_shortcode('[contact-form-7 id="89" title="Invente seu suco"]') ?>
    </div>
    <div class="col-md-4 contact-right">
        <h3 id="descricaoSuco"></h3>
        <div class="categories">
         <p id="comAmor">Com amor coloque:</p>
        <ul id="receita">

        </ul>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
<script src="<?= getHome();?>/js/geraSuco.js"></script>
<?php get_footer(); ?>
