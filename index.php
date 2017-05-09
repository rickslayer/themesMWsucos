<?php /*Template Name: templateInicio*/ ?>
 <?php get_header();?>

 <?php $home = get_template_directory_uri(); ?>

  <div class="banner" id="home">
        <section class="slider">
                <!--   <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-top">
                            <div class="col-md-6 banner-left">
                            <div class="bnr-one">
                                <img src="<?= $home;?>/images/b-2.jpg" alt="" />
                                <h3>Donec interdum</h3>
                                <p>Ambrosia is a Traditional fruit salad</p>
                            </div>
                        </div>
                        <div class="col-md-6 banner-left">
                            <div class="bnr-one">
                                <img src="<?= $home;?>/images/b-1.jpg" alt="" />
                                <h3>Aliquam bibendum</h3>
                                <p>Ambrosia is a Traditional fruit salad</p>
                            </div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top">
                        <div class="col-md-6 banner-left">
                            <div class="bnr-one">
                                <img src="<?= $home;?>/images/b-2.jpg" alt="" />
                                <h3>Aliquam bibendum</h3>
                                <p>Ambrosia is a Traditional fruit salad</p>
                            </div>
                        </div>
                        <div class="col-md-6 banner-left">
                            <div class="bnr-one">
                                <img src="<?= $home;?>/images/b-3.jpg" alt="" />
                                <h3>Quisque pharetra</h3>
                                <p>Ambrosia is a Traditional fruit salad</p>
                            </div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top">
                        <div class="col-md-6 banner-left">
                            <div class="bnr-one">
                                <img src="<?= $home;?>/images/b-1.jpg" alt="" />
                                <h3>Quisque pharetra</h3>
                                <p>Ambrosia is a Traditional fruit salad</p>
                            </div>
                        </div>
                        <div class="col-md-6 banner-left">
                            <div class="bnr-one">
                                <img src="<?= $home;?>/images/b-2.jpg" alt="" />
                                <h3>Donec interdum</h3>
                                <p>Ambrosia is a Traditional fruit salad</p>
                            </div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </li>
          </ul>
        </div>-->
      </section>
    </div>
    <!--banner-ends-->
    <!--FlexSlider-->
    <link rel="stylesheet" href="<?= $home;?>/css/flexslider.css" type="text/css" media="screen" />
    <script defer src="<?= $home;?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
  /* $(function(){
      SyntaxHighlighter.all();

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
     });*/
  </script>
            <!--End-slider-script-->
<div class="welcome">
    <div class="container">
    <?php $resp = getDadosPostInterno('internobemvindos'); ?>
         <h4><?= $resp[0]->post_title;?></h4>
        <p><?= $resp[0]->post_content;?></p>
    </div>
</div>
<div class="welcome-bottom">
    <div class="container">

        <div class="welcome-bottom-info">
                <div class="col-md-8 slit-slider">
                    <section class="main">
                        <div class="ia-container">
                    <figure>
                        <img src="<?=$home;?>/images/port-1.jpg" alt="image01" />
                        <input type="radio" name="radio-set" checked="checked"/>
                        <figcaption><span>Suco Lua</span></figcaption>
                        <figure>
                            <img src="<?=$home;?>/images/port-2.jpg" alt="image02" />
                            <input type="radio" name="radio-set" />
                            <figcaption><span>Suco Marte</span></figcaption>
                            <figure>
                                <img src="<?= $home;?>/images/port-3.jpg" alt="image03" />
                                <input type="radio" name="radio-set" />
                                <figcaption><span>Suco Mercúrio</span></figcaption>
                                <figure>
                                    <img src="<?= $home;?>/images/port-4.jpg" alt="image04" />
                                    <input type="radio" name="radio-set" />
                                    <figcaption><span>Suco Júpiter</span></figcaption>
                                    <figure>
                                        <img src="<?= $home;?>/images/port-5.jpg" alt="image05" />
                                        <input type="radio" name="radio-set" />
                                        <figcaption><span>Suco Vênus</span></figcaption>
                                        <figure>
                                            <img src="<?= $home;?>/images/port-6.jpg" alt="image06" />
                                            <input type="radio" name="radio-set" />
                                            <figcaption><span>Suco Saturno</span></figcaption>
                                            <figure>
                                                <img src="<?= $home;?>/images/port-7.jpg" alt="image07" />
                                                <input type="radio" name="radio-set" />
                                                <figcaption><span>Suco Sol</span></figcaption>
                                                <!--<figure>
                                                    <img src="<?= $home;?>/images/port-8.jpg" alt="image08" />
                                                    <input id="ia-selector-last" type="radio" name="radio-set" />
                                                    <figcaption><span>Green Grape Salad</span></figcaption>
                                                </figure>-->
                                            </figure>
                                        </figure>
                                    </figure>
                                </figure>
                            </figure>
                        </figure>
                    </figure>
                </div><!-- ia-container -->
            </section>
            </div>
                <div class="col-md-4 slit-slider-text">
                    <h4>Milk Way Juiiiiiiiccccccceeeeeeee!!!</h4>
                    <p>Conheça a primeira casa de suco completamente natural de Arujá. Milk Way chegou pra ficar e trazer: Novidades
                    para uma alimentação saudável, Qualidade e claro um atendimento sem igual. Venha nos conhecer, e experimentar nossos deliciosos sucos.</p>
                </div>
                <div class="clearfix"> </div>
                </div>
    </div>
</div>
    <!--offer-starts-->
    <div class="offer">
      <div class="container">
              <!--<div class="offer-top heading">
                <h4>Os Mais Consumidos</h4>
            </div>
            <div class="offer-bottom">
                <div class="col-md-3 offer-left">
                    <a href="single.html"><img src="<?= $home;?>/images/o-1.jpg" alt="" />
                    <h6>Orange Salad</h6></a>
                    <h4><a href="single.html">Quisque sed neque</a></h4>
                    <p>Maecenas interdum augue eget elit interdum, vitae elementum diam molestie. Nulla facilisi.</p>
                    <div class="o-btn">
                        <a href="single.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-3 offer-left">
                    <a href="single.html"><img src="<?= $home;?>/images/o-2.jpg" alt="" />
                    <h6>Mixed Salad</h6></a>
                    <h4><a href="single.html">Donec mattis nunc</a></h4>
                    <p>Maecenas interdum augue eget elit interdum, vitae elementum diam molestie. Nulla facilisi.</p>
                    <div class="o-btn">
                        <a href="single.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-3 offer-left">
                    <a href="single.html"><img src="<?= $home;?>/images/o-3.jpg" alt="" />
                    <h6>Strawberry Salad</h6></a>
                    <h4><a href="single.html">Maecenas non risus</a></h4>
                    <p>Maecenas interdum augue eget elit interdum, vitae elementum diam molestie. Nulla facilisi.</p>
                    <div class="o-btn">
                        <a href="single.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-3 offer-left">
                    <a href="single.html"><img src="<?= $home;?>/images/o-5.jpg" alt="" />
                    <h6>Grape Salad</h6></a>
                    <h4><a href="single.html">Nullam vitae nisl</a></h4>
                    <p>Maecenas interdum augue eget elit interdum, vitae elementum diam molestie. Nulla facilisi.</p>
                    <div class="o-btn">
                        <a href="single.html">Read More</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>-->
        </div>
    </div>
    <!--offer-ends-->
    <!--nature-starts-->
    <div class="nature">
            <div class="nature-top">
             <?php
                   $resp = getDadosPostInterno('internopromocoeseventos');
                ?>
                <h3><?= $resp[0]->post_title;?></h3>

                <p><?= $resp[0]->post_content;?></p>
            </div>
        </div>
    <!--nature-ends-->
<script type="text/javascript">
    jQuery(function($){
       $("#inicio a").addClass("active");
    });
</script>
<?php get_footer(); ?>

