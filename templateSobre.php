<?php /*Template Name: templateSobre*/ ?>
 <?php $home = get_template_directory_uri(); ?>
 <?php get_header(); ?>
 <script type="text/javascript">
    $(function(){
            $("#sobre a").addClass("active");
    });
</script>
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
                        <a href="#"><img src="<?= $home;?>/images/abt-1.jpg" alt="" /></a>
                        <h5><a href="#">Missão</a></h5>
                        <p>
                            A Milk Way Sucos Naturais, tem como missão: fabricar produtos de altíssima qualidade, preservando seu sabor com sofisticação e originalidade.
</p>
<p>Preocupada em proporcionar satisfação e bem estar através de seus sucos, está sempre atenta às mudanças do mercado para inovar e ir ao encontro das preferências de seus consumidores, oferecendo o melhor atendimento e o melhor produto para consumir.</p>

<p>Trabalhando com prazer e emoção, visamos atender com excelência o interesse dos parceiros, a motivação do colaborador e a satisfação do consumidor.
</p>


                    </div>
                    <div class="col-md-4 about-left">
                        <a href="#"><img src="<?= $home;?>/images/abt-2.jpg" alt="" /></a>
                        <h5><a href="#">Visão</a></h5>
                        <p>Ser um estabelecimento competitivo que atue de forma abrangente no seguimento de bebidas naturais, através de um portfólio de produtos com qualidade, representado por marcas fortes, com características e propostas únicas.</p>
                    </div>
                    <div class="col-md-4 about-left">
                        <a href="#"><img src="<?= $home;?>/images/abt-3.jpg" alt="" /></a>
                        <h5><a href="#">Nossos Valores</a></h5>
                        <div class="advn-two">
                         <ul>
                            <li><a href="#">Qualidade</a></li>
                            <li><a href="#">Ética e Respeito</a></li>
                            <li><a href="#">Responsabilidade Ambiental</a></li>
                            <li><a href="#">Responsabilidade Social</a></li>
                            <li><a href="#">Trabalho em Equipe</a></li>
                        </ul>
                        </div>
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
                <h2>Por que ir na Milk Way?</h2>
                <div class="advn-one">
                        <div class="ad-mian">
                            <div class="ad-left">
                                <p>1</p>
                            </div>
                            <div class="ad-right">
                                <h4><a href="#">Preço</a></h4>
                                <p>Mantemos um preço justo e competitivo. E o mais importante: Não abrimos mão da qualidade. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ad-mian">
                            <div class="ad-left">
                                <p>2</p>
                            </div>
                            <div class="ad-right">
                                <h4><a href="#">Ambiente</a></h4>
                                <p>Nosso atendimento é de primeira. Receba o melhor atentimento da região, satisfação garantida. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ad-mian">
                            <div class="ad-left">
                                <p>3</p>
                            </div>
                            <div class="ad-right">
                                <h4><a href="#">Inovação</a></h4>
                                <p>Somente na Milk Way você encontrará sucos autênticos e inventados na própria casa. Claro com um auxílio de uma Nutricionista. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 advantages-left">
                <h3>Nossas invenções</h3>
            <div class="advn-two">
                        <h4>Conheça um pouco da nossas invenções</h4>
                        <p>Milky Way siginifica Via Láctea. Devido a forma leitosa que nossa galáxia tem ao ser vista de um telescópio. Milk (leite)
                        Way (caminho) , ou seja, caminho do leite é nosso nome fantasia que nos trouxe a ideia de criar sucos com o nome dos astros que compõe a via láctea. E pra completar cada dia da semana significa o nome de um astro.
                        </p>
                        <ul>
                            <li><a href="#">Suco Sol</a></li>
                            <li><a href="#">Suco Lua</a></li>
                            <li><a href="#">Suco Marte</a></li>
                            <li><a href="#">Suco Mercúrio</a></li>
                            <li><a href="#">Suco Jupiter</a></li>
                            <li><a href="#">Suco Vênus</a></li>
                            <li><a href="#">Suco Saturno</a></li>

                        </ul>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--advantages-end-->

    <div class="team">
       <!--team-starts   <div class="container">
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
        </div>-->
    </div>







    <?php
         }


       }
 ?>

    <!--team-end-->
<?php get_footer(); ?>

