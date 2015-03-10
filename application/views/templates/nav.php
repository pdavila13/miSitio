<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!--
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand topnav" href="#">Start Bootstrap</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Indicates a successful or positive action -->
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="<? echo base_url('index.php/home/login'); ?>"><button type="button" class="btn-login btn-success">Login</button></a>
                </li>
            </ul>
            
                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<? echo base_url(); ?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<? echo base_url('#about'); ?>">Acerca de</a>
                    </li>
                    <li>
                        <a href="<? echo base_url('#services'); ?>">Servicios</a>
                    </li>
                    <li>
                        <a href="<? echo base_url('index.php/home/gallery');?> ">Galeria</a>
                    </li>
                    <li>
                        <a href="http://paolodavila.com/mediawiki" target="_blank">Wiki</a>
                    </li>
                    <li>
                        <a href="<? echo base_url('#contact'); ?>">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->