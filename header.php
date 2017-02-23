<!DOCTYPE html>
<html>
<head>
<?php $home = get_template_directory_uri(); ?>
<meta charset="utf-8">
 <?php wp_head(); ?>
<title> <?php geraTitle();?></title>
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
<!---- start-smoth-scrolling---->
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
<!---- start-smoth-scrolling---->
</head>
<body>
    <!----start-header---->
    <div class="header" id="home">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="<?= $home;?>/images/logo-23.png" alt=""></a>
            </div>
            <div class="navigation">
             <span class="menu"></span>
                <ul class="navig">
                    <li><a class="active" href="<?=home_url();?>">Início</a><span> </span></li>
                    <li><a href="<?=home_url();?>/sobre">Sobre</a><span> </span></li>
                    <li><a href="<?=home_url();?>/blog">Blog</a><span> </span></li>
                    <li><a href="<?=home_url();?>/fotos">Fotos</a><span> </span></li>
                    <li><a href="<?=home_url();?>/contatos">Contatos</a><span> </span></li>
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


