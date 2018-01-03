<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Agencia Alca" />
        <meta name="description" content="Cris Nunes - Coach profissional"/>
        <meta name="keywords" content="coach"/>
        

        <title><?= bloginfo(); wp_title('-', true, 'left'); ?> </title>
        <?php wp_head(); ?>
        <!--Stylesheet-->

    </head>

    <body>

        <!-- Preloader -->
        <div id="loader">
            <!-- Preloader inner -->
            <div id="loaderInner">

                <!-- Loader bars -->
                <div class="loaderBars">
                    <span class="bar1 bar"></span>
                    <span class="bar2 bar"></span>
                    <span class="bar3 bar"></span>
                </div>
                <!-- End loader bars -->

            </div>
            <!-- End preloader inner -->
        </div>
        <!-- End preloader -->


        <!--Wrapper-->
        <div id="wrapper">




            <!--Header-->
            <header id="header" >

                <!--Main header-->
                <div class="mainHeader default">


                    <!--Container-->
                    <div class="container clearfix">
                        <div class="three columns logoHolder">
                            <!--Logo-->
                            <div class="logo">
                                <!-- imagem vindo do css -->
                            </div>
                            <!--End logo-->
                        </div>


                        <div class="thirteen columns tRight">

                            <a href="#" class="mobileBtn" ><i class="icon-menu"></i></a>
                            <!--Navigation-->
                            <nav class="mainNav" >
                            <?php wp_nav_menu( $args );  ?>

<!--                                <ul>
                                    <li><a class="scroll" href="#about">About us</a></li>
                                    <li><a class="scroll" href="#services">Services</a></li>
                                    <li><a class="scroll" href="#pricing">Pricing</a></li>
                                    <li><a class="scroll" href="#portfolio">Portfolio</a></li>
                                    <li><a class="scroll" href="#blog">Blog</a></li>
                                    <li><a class="scroll" href="#contact">Contact</a></li>

                                </ul>-->

                            </nav>
                            <!--End navigation-->

                        </div>
                        <!--End container-->




                    </div>
                    <!--End main header-->
                </div>

            </header>
            <!--End header-->



