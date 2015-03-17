<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="<?php echo base_url(); ?>">Inicio</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="<?php echo base_url('#about'); ?>">Acerca de</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="<?php echo base_url('#services'); ?>">Servicios</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="<?php echo base_url('index.php/home/gallery'); ?>">Galeria</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="http://paolodavila.com/mediawiki" target="_blank">Wiki</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="<?php echo base_url('#contact'); ?>">Contacto</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Paolo Dávila 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap-theme.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-theme.min.js'); ?>"></script>

    <!-- jQuery library -->
            <script src="<?php echo base_url('assets/src/js/libs/jquery/2.0.2/jquery.min.js'); ?>"></script>
            <!-- least.js library -->
            <script src="<?php echo base_url('assets/src/js/libs/least/least.min.js'); ?>"></script>

            <script>
                $(document).ready(function(){
                    $('.least-gallery').least();
                });
            </script>
            
            <!-- &&& START CODE &&& ONLY FOR PERSONAL USE: PLEASE DON'T EMBED THIS CODE INTO YOUR PAGE -->
            <script>
                /* Google Analytics */
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-16040332-11', 'leastjs.com');
                ga('set', 'anonymizeIp', true);
                ga('send', 'pageview');
            </script>
            <!-- &&& END CODE &&& ONLY FOR PERSONAL USE: PLEASE DON'T EMBED THIS CODE INTO YOUR PAGE-->

</body>

</html>
