<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<?php $home = get_template_directory_uri(); ?>
<meta charset="utf-8">
<title> <?php geraTitle();?></title>
    <link rel="icon" type="image" href="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUwIDUwLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTAgNTAuMDAxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI2LjEyLDE0LjQ4OGMwLjg3OS0xLjQ2OCwyLjI3LTMuNTY5LDQuMDI3LTUuNTg1aDAuMDAyYzEuNDg4LTEuNzExLDQuNDAyLTMuOTA3LDQuNDAyLTMuOTA3ICAgIGMwLjQzOC0wLjMzMSwwLjM5MS0wLjc5Mi0wLjEwNy0xLjAyNGwtMy41MjItMS42NDZjLTAuNDk4LTAuMjMzLTEuMTc1LTAuMDYzLTEuNTA1LDAuMzc2YzAsMC0yLjYwNSwzLjczNy01LjY3MSwxMS42OTIgICAgYy05LjQ4LTQuMjg4LTE4LjQ5MSwxLjcxOC0xOC40OTEsMTIuMTYyYzAsMTAuOTA5LDguMzkzLDI3LjQ4LDE5Ljc0MywyMi40NzhjMTEuOTU0LDUuMTczLDE5Ljc0OS0xMS41NjgsMTkuNzQ5LTIyLjQ3OCAgICBDNDQuNzQ3LDE2LjAyMiwzNi42NDcsOS44NDYsMjYuMTIsMTQuNDg4eiIgZmlsbD0iI2ZmNmMyYyIvPgoJCTxwYXRoIGQ9Ik0yMy45OTcsMTAuOTU1YzAuNTQ4LTAuMDQ2LDEuMDMyLTAuNTMxLDEuMDc2LTEuMDc4YzAsMCwwLjM1Mi00LjI2Ni0yLjYyMS03LjI0MmMtMi45ODItMi45NzctNy4yNC0yLjYyMi03LjI0LTIuNjIyICAgIGMtMC41NDgsMC4wNDYtMS4wMzIsMC41MzEtMS4wNzcsMS4wNzhjMCwwLTAuMzU4LDQuMjY4LDIuNjE5LDcuMjQ1QzE5LjcyOSwxMS4zMSwyMy45OTcsMTAuOTU1LDIzLjk5NywxMC45NTV6IiBmaWxsPSIjZmY2YzJjIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fruit_Salad Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" type="text/css" href="<?= $home;?>/css/style.css">
<link href="<?= $home;?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Enriqueta:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<script src="<?= $home;?>/js/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= $home;?>/js/move-top.js"></script>
<script type="text/javascript" src="<?= $home;?>/js/customJs.js"></script>
<script type="text/javascript" src="<?= $home;?>/js/easing.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
</script>
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92884277-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>
    <!----start-header---->
    <div class="header" id="home">
        <div class="container">
            <div class="logo">
                <a href="<?= home_url();?>"><img src="<?= $home;?>/images/logo-site-principal.png" alt=""></a>
            </div>
            <div class="navigation">
             <span class="menu"></span>
                <ul class="navig">
                    <li id="inicio"><a href="<?=home_url();?>">Início</a><span> </span></li>
                    <li id="invente"><a href="<?=home_url();?>/invente-seu-suco"><em>Invente Seu Suco</em></a><span> </span></li>
                    <li id="sobre"><a href="<?=home_url();?>/sobre">Sobre</a><span> </span></li>
                    <li id="blog"><a href="<?=home_url();?>/blog">Blog</a><span> </span></li>
                    <li id="fotos"><a href="<?=home_url();?>/fotos">Fotos</a><span> </span></li>
                    <li id="contatos"><a href="<?=home_url();?>/contatos">Contatos</a><span> </span></li>
                </ul>
            </div>
                 <!-- script-for-menu -->
         <script>
                $("span.menu").click(function(){
                    $(" ul.navig").slideToggle("slow" , function(){
                    });
                });
         </script>
         <!-- script-for-menu -->
        </div>
    </div>
    <!----end-header---->
    <!--banner-starts-->


