<?php include_once 'header.php'; ?>

<!--Main slider holder-->
<div class="mainSliderHolder">

    <!--Main slider-->
    <div class="mainSlider flexslider">

        <!--Slides-->
        <ul class="slides">
            <li class="overlay"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sliderImages/slide1.png" height="918px" class="slide"  alt=""/></li>
            <li class="overlay"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sliderImages/slide1.png"  height="918px" class="slide" alt=""/></li>
        </ul>
        <!--End slides-->

        <!--Slides inner-->
        <div class="slidesInner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logocor1.png" alt=""/>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            <!--Socials slider-->
            <ul class="socialsSlider">
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
            <!--End socials slider-->

        </div>
        <!--End slides inner-->
    </div>
    <!--End main slider-->
</div>
<!--End main slider holder-->



<!--About section-->
<section id="sobre" class="tCenter">

    <!--About intro-->
    <div class="aboutIntro bgGreyDark  ofsTop ofsBottom margLBottom">


        <!--Container-->
        <div class="container clearfix">

            <!--Title-->
            <div class="title light ofsBMedium">
                <h1>Sobre<span class="plus">+</span></h1>
            </div>
            <!--End title-->


            <!--About intro content-->
            <div class="aboutIntroContent">
                <h1>Lorem Ipsum is simply dummy, <span>CONSECTETUER</span></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>

                <a class="btn" href="#">saiba mais</a>
            </div>
            <!--End about intro content-->

        </div>
        <!--End container-->

    </div>
    <!--End about intro-->



    <!--Expertise holder-->
    <div id="servicos" class="expertiseHolder margLBottom">


        <!--Container-->
        <div class="container clearfix">


            <!--Title-->
            <div class="title dark ofsBottom">
                <h1>SERVIÇOS<span class="plus">+</span></h1>
            </div>
            <!--End title-->


            <!--Expertise-->
            <div class="exp one-third column tCenter ">

                <!--Expertise ico-->
                <div class="expIco ">
                </div>

                <!--End expertise ico-->


                <!--Expertise details-->
                <div class="expDet">
                    <h2 class="expTitle">LOREM IPSUM</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <a href="#">saiba mais</a>
                </div>
                <!--End Expertise details-->
            </div>
            <!--End expertise-->


            <!--Expertise-->
            <div class="exp one-third column tCenter selected ">

                <!--Expertise ico-->
                <div class="expIco ">
                </div>
                <!--End expertise ico-->


                <!--Expertise details-->
                <div class="expDet">
                    <h2 class="expTitle">Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <a href="#">saiba mais</a>
                </div>
                <!--End Expertise details-->
            </div>
            <!--End expertise-->

            <!--Expertise-->
            <div class="exp one-third column tCenter ">

                <!--Expertise ico-->
                <div class="expIco ">
                </div>
                <!--End expertise ico-->

                <!--Expertise details-->
                <div class="expDet">
                    <h2 class="expTitle">Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <a href="#">saiba mais</a>
                </div>
                <!--End Expertise details-->
            </div>
            <!--End expertise-->
        </div>
        <!--End container-->
    </div>
    <!--End expertise holder -->


    <!--Shorten -->
    <div id="call" class="shorten clearfix">


        <!--Shorten inner -->
        <div class="shortenInner">

            <!--Services shorten -->
            <div class="servSht">
                <div class="servImg overlay"></div>
                <div class="inner">
                    <h1>palestras</h1>	
                </div>
            </div>
            <!--End services shorten -->				


            <!--Works shorten -->
            <div class="worksSht">
                <div class="workImg overlay"></div>
                <div class="inner">
                    <h1>psicologia positiva</h1>
                </div>
            </div>
            <!--End works shorten -->


        </div>
        <!--End shorten inner -->



        <!--Shorten buttons-->
        <div class="shortenBtn clearfix">

            <!--Service button-->
            <div class="servBtn">
                <a class="scroll" href="#services">+</a>	
            </div>
            <!--End service button-->


            <!--Work button-->
            <div class="workBtn">
                <a class="scroll" href="#portfolio">+</a>	
            </div>
            <!--End work button-->


        </div>
        <!--End shorten buttons -->

    </div>
    <!--End shorten -->



    <!--Blog section-->
    <section id="blog" class="tCenter ">


        <!--Blog holder -->
        <div class="blogHolder  ofsTop ofsBottom ">

            <!--Title-->
            <div class="title dark ">
                <h1>últimas postagens no blog<span class="plus">+</span></h1>
            </div>
            <!--End title-->

            <!--Container-->
            <div class="container clearfix">

                <!--Large intro-->
                <div class="largeIntro  ofsTSmall">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore.

                    </p>
                </div>
                <!--End large intro-->

                <!--Latest holder-->

                <div class="latestHolder margTop clearfix tLeft">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <!--Post large latest-->
                            <div class="postLarge last one-third column">

                                <!--Post content-->
                                <div class="postContent">

                                    <div class="postTitle">
                                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                                        <!--Post meta-->
                                        <div class="postMeta">
                                            <!--<span class="metaCategory"><?php // the_category(); ?> - </span>-->
                                            <span class="metaDate"><?php the_date(); ?></span>
                                        </div>
                                        <!--End post meta-->

                                    </div>

                                    <!--Post image-->
                                    <div class="postMedia">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(false, array('class' => 'img-responsive')); ?>
                                        </a>
                                    </div>
                                    <!--End post image-->

                                    <p><?php the_excerpt(); ?></p>

                                    <a class="btn more border" href="<?php the_permalink(); ?>">saiba mais</a>
                                </div>
                                <!--End post content-->	

                            </div>
                            <?php
                        endwhile;
                        paginacao_blog();
                    endif;
                    ?>
                    <!--End post large latest-->
                </div>
                <!--End container-->
            </div>
            <!--End blog holder-->
    </section>
    <!--End blog section-->


    <!--Socials section-->
    <section class="socials tCenter ">

        <!--Instagram-->
        <div class="insta overlay">


            <div class="instaInner">
                <ul class="instaFeed"></ul>
            </div>

            <div class="instaTitle">
                <div class="instaIco"><i class="icon-instagram"></i></div>
                <h3>Siga no instagram<span>@coachcrisnunes</span></h3>
            </div>

        </div>
        <!--End instagram-->

    </section>
    <!--End socials section-->



    <!--Contact section-->
    <section id="contato" class="tCenter ">


        <!--Contact holder -->
        <div class="contactHolder  ofsTop  ">

            <!--Title-->
            <div class="title dark ">
                <h1>contato<span class="plus">+</span></h1>
            </div>
            <!--End title-->

            <!--Container-->
            <div class="container clearfix">

                <!--Contact inner -->
                <div class="contactInner fourteen columns ">

                    <!--Contact form-->
                    <div class="contactForm tLeft margTMedium">
                        <form action="send.php" method="post">

                            <!--Input columns-->
                            <div class="inputColumns clearfix">

                                <div class="column1">
                                    <div class="columnInner">
                                        <input type="text" name="name" id="name" value="" placeholder="Nome *">
                                    </div>
                                    <div class="columnInner">
                                        <input type="text" name="email" id="email" value="" placeholder="Email *">
                                    </div>
                                    <div class="columnInner">
                                        <input type="text" name="telefone" id="telefone" value="" placeholder="Telefone *">
                                    </div>
                                    <div class="column3">
                                        <textarea rows="5" cols="45" id="message" placeholder="Mensagem *" name="mensagem"></textarea>
                                    </div>
                                    <div class="column4">
                                        <div id="submit" class="btn">Enviar</div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column2">
                                    <div class="columnInner">
                                        <p>Av, 4 - St. Oeste, Goiânia - GO, 74280-220<br><br>
                                            (62) 3480293840<br>
                                            (62) 2309480293</p>
                                    </div>

                                </div>



                            </div>
                            <!--End input columns-->





                        </form>


                        <!--Contact form message-->
                        <div id="success"><h2>Your message has been sent. Thank you!</h2></div>
                        <div id="error"><h2>Sorry your message can not be sent.</h2></div>
                        <!--End contact form message-->
                    </div>
                    <!--End contact form-->

                </div>
                <!--End contact inner -->

            </div>
            <!--End container-->

        </div>
        <!--End contact holder -->

    </section>
    <!--End contact section-->

    <?php include_once 'footer.php'; ?>

