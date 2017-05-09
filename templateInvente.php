<?php /*Template Name: templateInvente*/ ?>
<?php get_header(); ?>

<div class="banner banner5" id="home"> </div>

<div class="contact">
    <div class="container">
        <div class="blog-head heading">
            <h3><?=the_title();?></h3>
        </div>
        <div class="contact-top">
            <div class="contact-bottom">
                 <div class="col-md-8 contact-right">
                      <?php echo do_shortcode('[contact-form-7 id="89" title="Invente seu suco"]') ?>
                </div>
                <div class="col-md-4 contact-right">
                      <h3>Faça seu suco e nos envie. Sortearemos e você pode ganhar</h3>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="related">
                <div class="related-bottom">
                    <h3>VEJA O SUCO DOS OUTROS</h3>
                    <div class="related-bottom">
                        <?php
                            $valores = array(
                                "_field_inventeMensagem"

                            );
                            $dados = array(
                                'tabela' => 'mw_postmeta',
                                'campo'  => 'meta_key',
                                'valor'  => $valores
                            );

                            $resp = getViaSelect($dados);
                            //die(print_r($resp, true));
                            foreach ($resp as $key)

                             {?>

                            <div class="col-md-3 related-left">
                                <div class="blog-main">
                                <p>
                                     <a href="#"> <?=$key->meta_value;?>  </a>


                                </p>
                                </div>

                            </div>

                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<script src="<?= getHome();?>/js/geraSuco.js"></script>
<script type="text/javascript">
    jQuery(function($){
      $("#invente a").addClass("active");
    });
</script>
<?php get_footer(); ?>
