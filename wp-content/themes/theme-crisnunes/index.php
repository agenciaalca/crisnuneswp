<?php include_once 'header.php'; ?>

<!--Main slider-->
<div class="mainSliderHolder">

    <div class="mainSlider flexslider">
        <ul class="slides">
            <li class="overlay"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.png" height="918px" class="slide"  alt=""/></li>
            <li class="overlay"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.png"  height="918px" class="slide" alt=""/></li>
        </ul>

        <div class="slidesInner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logocor1.png" alt=""/>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            <ul class="socialsSlider">
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>

        </div>
    </div>
</div><!-- fim main slider -->

<section  class="tCenter">
    
    <!-- section Sobre -->
    <div id="sobre" class="aboutIntro bgGreyDark  ofsTop ofsBottom margLBottom">
        <div class="container clearfix">
            <div class="title light ofsBMedium">
                <h1>Sobre<span class="plus">+</span></h1>
            </div>
            <div class="aboutIntroContent">
                <h1>Lorem Ipsum is simply dummy, <span>CONSECTETUER</span></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <a class="btn" href="#">saiba mais</a>
            </div>
        </div>
    </div>
    <!--fim section sobre-->

    <!-- servicos -->
    <div id="servicos" class="expertiseHolder margLBottom">
        <div class="container clearfix">
            <div class="title dark tCenter ofsBottom">
                <h1>SERVIÇOS<span class="plus">+</span></h1>
            </div>

            <div class="exp one-third column tCenter ">
                <div class="expIco "></div>

                <div class="expDet">
                    <h2 class="expTitle">LOREM IPSUM</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                    <a href="#">saiba mais</a>
                </div>
            </div>

            <div class="exp one-third column tCenter selected ">
                <div class="expIco "></div>
                <div class="expDet">
                    <h2 class="expTitle">Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <a href="#">saiba mais</a>
                </div>
            </div>

            <div class="exp one-third column tCenter ">
                <div class="expIco "></div>
                <div class="expDet">
                    <h2 class="expTitle">Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <a href="#">saiba mais</a>
                </div>
            </div>
        </div>
    </div><!-- fim serviços -->

    <!--call to action -->
    <div id="call" class="shorten clearfix">
        <div class="shortenInner">
            <div class="servSht">
                <div class="servImg overlay"></div>
                <div class="inner">
                    <h1>palestras</h1>	
                </div>
            </div>
            <div class="worksSht">
                <div class="workImg overlay"></div>
                <div class="inner">
                    <h1>psicologia positiva</h1>
                </div>
            </div>
        </div>

        <div class="shortenBtn clearfix">
            <div class="servBtn">
                <a class="scroll" href="#">+</a>	
            </div>
            <div class="workBtn">
                <a class="scroll" href="#">+</a>	
            </div>
        </div>
    </div><!-- fim call to action -->
</section>

<!--Blog section-->
<section id="blog" class="tCenter ">
    <div class="blogHolder  ofsTop ofsBottom ">
        <div class="title dark ">
            <h1>últimas postagens no blog<span class="plus">+</span></h1>
        </div>
        <div class="container clearfix">
            <div class="largeIntro  ofsTSmall">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>

            <div class="latestHolder margTop clearfix tLeft">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="postLarge last one-third column">
                    <div class="postContent">
                        <div class="postTitle">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <div class="postMeta">
                                <!--<span class="metaCategory"><?php // the_category(); ?> - </span>-->
                                <span class="metaComments"><?php the_date(); ?></span>
                            </div>
                        </div>
                        <div class="postMedia">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(false, array('class' => 'img-responsive')); ?>
                            </a>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                        <a class="btn more border" href="<?php the_permalink(); ?>">saiba mais</a>
                    </div>
                </div>
                <?php
                    endwhile;
                    paginacao_blog();
                    endif;
                ?>
            </div>
        </div>
</section><!-- fim blog -->

<!-- Instagram -->
<section class="socials tCenter ">
    <div class="insta overlay">
        <div class="instaInner">
            <ul class="instaFeed"></ul>
        </div>
        <div class="instaTitle">
            <div class="instaIco"><i class="icon-instagram"></i></div>
            <h3>Siga no instagram<span>@coachcrisnunes</span></h3>
        </div>
    </div>
</section><!-- fim instagram -->

<!-- contato -->
<section id="contato" class="tCenter ">
    <div class="contactHolder  ofsTop  ">
        <div class="title dark ">
            <h1>contato<span class="plus">+</span></h1>
        </div>
        <div class="container clearfix">
            <div class="contactInner fourteen columns ">
                <div class="contactForm tLeft margTMedium">
                    <form action="send.php" method="post">
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
                            <div class="column2">
                                <div class="columnInner">
                                    <p>Av, 4 - St. Oeste, Goiânia - GO, 74280-220<br><br>
                                        (62) 3480293840<br>
                                        (62) 2309480293</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--End contato -->

<?php include_once 'footer.php'; ?>

