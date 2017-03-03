<?php wp_footer(); ?>

<div class="footer">
            <div class="footer-grids">
                <div class="container">
                    <div class="col-md-3 footer-grid">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">Contact Customer Service</a></li>
                            <li><a href="#">Free Delivery</a></li>
                            <li><a href="#">View your Wishlist</a></li>
                            <li><a href="#">Ring Size Guide</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                            <h4>Information</h4>
                        <ul>
                            <li><a href="#">Gift certificates</a></li>
                            <li><a href="#">Jewellery care guide</a></li>
                            <li><a href="#">International customers</a></li>
                            <li><a href="#">Wholesale enquires</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h4>More details</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Secure payment</a></li>
                            <li><a href="#">Site map</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid contact-grid">
                        <h4>Contact us</h4>
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