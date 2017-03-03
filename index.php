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
        <h4>Bem vindo ao nosso mundo de sucos</h4>
        <p>Conheça o suco Lua, um suco para você começar a semana com todo o gás. Curioso? Conheça também os sucos Sol, Marte, Saturno etc.</p>
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
                        <figcaption><span>Juicy Fruit Salad</span></figcaption>
                        <figure>
                            <img src="<?=$home;?>/images/port-2.jpg" alt="image02" />
                            <input type="radio" name="radio-set" />
                            <figcaption><span>Fabulous Fruit Salad</span></figcaption>
                            <figure>
                                <img src="<?= $home;?>/images/port-3.jpg" alt="image03" />
                                <input type="radio" name="radio-set" />
                                <figcaption><span>Blueberry Salad</span></figcaption>
                                <figure>
                                    <img src="<?= $home;?>/images/port-4.jpg" alt="image04" />
                                    <input type="radio" name="radio-set" />
                                    <figcaption><span>Apple Salad</span></figcaption>
                                    <figure>
                                        <img src="<?= $home;?>/images/port-5.jpg" alt="image05" />
                                        <input type="radio" name="radio-set" />
                                        <figcaption><span>Strawberry Salad</span></figcaption>
                                        <figure>
                                            <img src="<?= $home;?>/images/port-6.jpg" alt="image06" />
                                            <input type="radio" name="radio-set" />
                                            <figcaption><span>Orange Salad</span></figcaption>
                                            <figure>
                                                <img src="<?= $home;?>/images/port-7.jpg" alt="image07" />
                                                <input type="radio" name="radio-set" />
                                                <figcaption><span>Mango Cashew Salad</span></figcaption>
                                                <figure>
                                                    <img src="<?= $home;?>/images/port-8.jpg" alt="image08" />
                                                    <input id="ia-selector-last" type="radio" name="radio-set" />
                                                    <figcaption><span>Green Grape Salad</span></figcaption>
                                                </figure>
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
                    <h4>Vitae elementum diam molestie</h4>
                    <p>Maecenas interdum augue eget elit interdum, vitae elementum diam molestie.
                        Nulla facilisi.Phasellus tempor erat id erat gravida pulvinar. Aenean est felis,
                         ullamcorper et volutpat sed, cursus at enim. Vestibulum vel finibus neque. In
                         sed magna tellus.Phasellus tempor erat id erat gravida pulvinar. Aenean est felis,
                         ullamcorper et volutpat sed, cursus at enim. Vestibulum vel finibus neque. In
                         sed magna tellus</p>
                </div>
                <div class="clearfix"> </div>
                </div>
    </div>
</div>
    <!--offer-starts-->
    <div class="offer">
        <div class="container">
            <div class="offer-top heading">
                <h4>Our Best Salads</h4>
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
            </div>
        </div>
    </div>
    <!--offer-ends-->
    <!--nature-starts-->
    <div class="nature">
            <div class="nature-top">
                <h3>Maecenas ornare lobortis</h3>
                <p>Fruit salad is a dish consisting of various kinds of fruit, sometimes served in a liquid, either in their own juices or a syrup. When served as an appetizer or as a dessert, a fruit salad is sometimes known as a fruit cocktail or fruit cup. In different forms fruit salad can be served as an appetizer, a side-salad, or a dessert.</p>
            </div>
        </div>
    <!--nature-ends-->

<?php get_footer(); ?>

