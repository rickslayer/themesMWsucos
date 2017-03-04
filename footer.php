<?php wp_footer(); ?>

<div class="footer">
            <div class="footer-grids">
                <div class="container">
                    <div class="col-md-3 footer-grid">
                        <h4>Vantagens</h4>
                        <ul>
                            <li><a href="#">Porque tomar suco natural?</a></li>
                            <li><a href="#">Como preparar um suco nutritivo</a></li>
                            <li><a href="#">Mitos e Verdades</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                            <h4>Informações</h4>
                        <ul>
                            <li><a href="#">Nossos Produtos</a></li>
                            <li><a href="#">Sacionalidade das Frutas</a></li>
                            <li><a href="#">Guia Informativo de Frutas</a></li>
                            <li><a href="#">Parcerias</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h4>Mais detalhes</h4>
                        <ul>
                            <li><a href="#">Sobre nós</a></li>
                            <li><a href="#">Política de Privacidade</a></li>
                            <li><a href="#">Termos e Condições</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid contact-grid">
                        <h4>Entre em Contato</h4>
                        <ul>
                            <li><span class="c-icon"> </span>Rua Ceará, 135 - Jardim Planalto - Arujá/SP</li>
                            <li><span class="c-icon1"> </span><a href="mailto:contato@mwsucos.com.br">contato@mwsucos.com.br</a></li>
                            <li><span class="c-icon2"> </span>(11) 97508-5586</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a href="http://facebook.com/mwsucos"><span class="facebook"> </span></a></li>
                            <li><a href="#"><span class="twitter"> </span></a></li>
                            <li><a href="http://instagram.com/mwsucos"><span class="instagram"> </span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <div class="copy">
                      <p>© <?= the_time('Y');?> by <?php bloginfo('name'); ?>  </p>
                    </div>
    <!--/footer-->
        <script type="text/javascript">
                                    $(document).ready(function() {
                                        /*
                                        var defaults = {
                                            containerID: 'toTop', // fading element id
                                            containerHoverID: 'toTopHover', // fading element hover id
                                            scrollSpeed: 1200,
                                            easingType: 'linear'
                                        };
                                        */

                                        $().UItoTop({ easingType: 'easeOutQuart' });

                                    });
                                </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!--footer-ends-->
</body>
</html>