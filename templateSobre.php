<?php /*Template Name: templateSobre*/ ?>
 <?php $home = get_template_directory_uri(); ?>
 <?php get_header(); ?>
<div class="banner banner5" id="home">

            </div>
 <?php
       if(have_posts()) {
         while(have_posts()){
                the_post();
                ?>

<div class="about">
        <div class="container">
            <div class="about-top heading">
                <h3><?=the_title();?></h3>

                <p> <?php the_content(); ?> </p>
                <div class="about-bottom">
                    <div class="col-md-4 about-left">
                        <a href="single.html"><img src="<?= $home;?>/images/abt-1.jpg" alt="" /></a>
                        <h5><a href="single.html">What We Do</a></h5>
                        <p>Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Vestibulum congue turpis ac tincidunt accumsan.</p>
                    </div>
                    <div class="col-md-4 about-left">
                        <a href="single.html"><img src="<?= $home;?>/images/abt-2.jpg" alt="" /></a>
                        <h5><a href="single.html">Our Standards</a></h5>
                        <p>Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Vestibulum congue turpis ac tincidunt accumsan.</p>
                    </div>
                    <div class="col-md-4 about-left">
                        <a href="single.html"><img src="<?= $home;?>/images/abt-3.jpg" alt="" /></a>
                        <h5><a href="single.html">Our Capabilities</a></h5>
                        <p>Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Vestibulum congue turpis ac tincidunt accumsan.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!----about-end---->
    <!--advantages-starts-->
    <div class="advantages">
        <div class="container">
            <div class="col-md-6 advantages-left">
                <h2>OUR ADVANTAGES</h2>
                <div class="advn-one">
                        <div class="ad-mian">
                            <div class="ad-left">
                                <p>1</p>
                            </div>
                            <div class="ad-right">
                                <h4><a href="single.html">Elacus a porta varius dui</a></h4>
                                <p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ad-mian">
                            <div class="ad-left">
                                <p>2</p>
                            </div>
                            <div class="ad-right">
                                <h4><a href="single.html">Elacus a porta varius dui</a></h4>
                                <p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ad-mian">
                            <div class="ad-left">
                                <p>3</p>
                            </div>
                            <div class="ad-right">
                                <h4><a href="single.html">Elacus a porta varius dui</a></h4>
                                <p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 advantages-left">
                <h3>OUR SKILLS</h3>
            <div class="advn-two">
                        <h4>Erci eu tincidunt lacinia, elit quam ultri ces ipsum, quis ultricies ipsum ante</h4>
                        <p>Donec sagittis interdum tellus sed bibendum. Aen ean fringilla ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac rhoncus libero.</p>
                        <ul>
                            <li><a href="#">Praesent vestibulum molestie lacus</a></li>
                            <li><a href="#">Donec sagittis interdum tellus</a></li>
                            <li><a href="#">Nulla consectetur adipiscing</a></li>
                            <li><a href="#">Donec ac rhoncus libero.</a></li>
                            <li><a href="#">Erci eu tincidunt lacinia</a></li>
                        </ul>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--advantages-end-->
    <!--team-starts-->
    <div class="team">
        <div class="container">
            <div class="team-top">
                <h3>OUR TEAM</h3>
            </div>
            <div class="team-bottom">

                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>taxi</h3>
                                        <p>by Ana Villa-Zamora <a href="http://drbl.in/ewng">View on Dribbble</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-2"></div>
                                    <div class="ch-info-back">
                                        <h3>Stay Foxy</h3>
                                        <p>by Arnel Baluyot <a href="http://drbl.in/eQDg">View on Dribbble</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                        <h3>Klava Jinx</h3>
                                        <p>by Jamal Charanek <a href="http://drbl.in/ejLW">View on Dribbble</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>







    <?php
         }


       }
 ?>

    <!--team-end-->
<?php get_footer(); ?>

