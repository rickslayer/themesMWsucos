<?php /*Template Name: templateContatos*/ ?>
<?php $home = get_template_directory_uri(); ?>
<?php get_header(); ?>
    <script src="<?=$home;?>/js/contatos.js"></script>
 <script type="text/javascript">
    $(function(){
            $("#contatos a").addClass("active");
    });
</script>
    <input type="hidden" id="caminho" value="<?=$home; ?>" />
    <div class="banner banner5" id="home"> </div>
    <!--contact-starts-->
    <div class="contact">
        <div class="container">
            <div class="contact-top">
                <div class="col-md-4 contact-left heading">
                    <h3>Venha nos visitar</h3>
                    <p>Nosso endereço é Rua Ceará,135 Jardim Planalto - Arujá - SP</p>
                </div>
                <div class="col-md-8 contact-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3661.7866648961412!2d-46.319778113068445!3d-23.39593373236168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94ce877c0be11a27%3A0x2b2d6a5e52682c14!2zUi4gQ2VhcsOhLCAxMzUsIEFydWrDoSAtIFNQLCAwNzQzMi01NzU!3m2!1d-23.396183399999998!2d-46.3181727!5e0!3m2!1spt-BR!2sbr!4v1488648008021" frameborder="0" style="border:0"> </iframe>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="contact-bottom">
                <div class="col-md-4 contact-left heading">
                    <h2>CONTATO</h2>
                    <p>Dúvidas, reclamações e sugestões nos envie uma mensagem.</p>
                </div>
                <div class="col-md-8 contact-right">
                    <?php echo do_shortcode( '[contact-form-7 id="71" title="Contact form 1"]' ); ?>
               </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!----contact-end---->
<?php get_footer() ?>