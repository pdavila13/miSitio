<html>
    <head>
        <title>
            least.js 2 - Random and Responsive HiDPI jQuery Gallery based on HTML5 and CSS3
        </title>

        <meta name="description" content="least.js 2 - Random and Responsive HiDPI jQuery Gallery based on HTML5 and CSS3">
        <meta charset="utf-8" />
        
        <!-- Responsive viewport for smartphone devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- least.js 2 CSS file -->
        <link href="<?php echo base_url('assets/src/css/least.min.css'); ?>" rel="stylesheet" />
    </head>
<!-- Page Content-->
    <div class="container">

            <div class="clearfix"></div>

            <div class="col-lg-12">
                <h1 class="page-gallery">Galeria de imágenes</h1>
            </div>

            <!-- Least Gallery -->
            <section id="least">
                
                <!-- Least Gallery: Fullscreen Preview -->
                <div class="least-preview"></div>
                
                <!-- Least Gallery: Thumbnails -->
                <ul class="least-gallery">
                    <!-- 1 || Element with data-caption ||-->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/01.jpg'); ?>" title="Skateboard" data-subtitle="View Picture" data-caption="<strong>Bold text</strong> normal caption text">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/01.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>
                    
                    <!-- 2 || Element with data-caption as href-attribute ||-->-->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/02.jpg'); ?>" title="Train Rails" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/02.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>
                    
                    <!-- 3 -->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/03.jpg'); ?>" title="Apple" data-subtitle="View Picture">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/03.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>

                    <!-- 4 -->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/04.jpg'); ?>" title="Road Trip" data-subtitle="View Picture">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/04.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>

                    <!-- 5 -->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/05.jpg'); ?>" title="Desert" data-subtitle="View Picture">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/05.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>

                    <!-- 6 -->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/06.jpg'); ?>" title="Tree" data-subtitle="View Picture">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/06.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>

                    <!-- 7 -->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/07.jpg'); ?>" title="MacBook" data-subtitle="View Picture">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/07.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>

                    <!-- 9 -->
                    <li>
                        <a href="<?php echo base_url('assets/src/media/big/09.jpg'); ?>" title="iPhone" data-subtitle="View Picture">
                            <img src="<?php echo base_url('assets/src/media/thumbnails/09.jpg'); ?>" alt="Alt Image Text" />
                        </a>
                    </li>
                </ul>

            </section>
            <!-- Least Gallery end -->

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
    </div>
    <!--/.container -->

    </html>


    <!--
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            -->