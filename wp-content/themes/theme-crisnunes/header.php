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
    </head>

    <body>
        <div id="loader">
            <div id="loaderInner">
                <div class="loaderBars">
                    <span class="bar1 bar"></span>
                    <span class="bar2 bar"></span>
                    <span class="bar3 bar"></span>
                </div>
            </div>
        </div>
        
        <!-- container -->
        <div id="wrapper">
            <header id="header" >
                <?php if (is_home()) : ?>
                    <div class="mainHeader default">
                <?php else : ?>
                    <div>
                <?php endif; ?>
                        <div class="container clearfix">
                            <div class="three columns logoHolder">
                                <div class="logo">
                                    <!-- imagem vindo do css -->
                                </div>
                            </div>
                            <div class="thirteen columns tRight">
                                <a href="#" class="mobileBtn" ><i class="icon-menu"></i></a>
                                <nav class="mainNav" >
                                    <!-- menu do wordpress -->
                                    <?php wp_nav_menu($args); ?>
                                </nav>
                            </div>
                        </div>
                        <!--End main header-->
                    </div>
            </header>