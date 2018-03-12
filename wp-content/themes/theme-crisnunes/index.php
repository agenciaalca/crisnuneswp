<?php include_once 'header.php'; ?>

<div class="mainSliderHolder">
 
    <!--Main slider-->
     <div class="mainSlider flexslider">

        <!--Slides-->
         <ul class="slides">
         <?php if ( have_rows( 'slider', 'option' ) ): 
            $cont = 0;
            while ( have_rows( 'slider', 'option' ) ) : the_row();
                $imagem = get_sub_field( 'imagem', 'option' );
                $size = 'full';
                $thumb = $imagem['sizes'][$size];
                $cont++;
            
                if ( !empty( $imagem ) ): ?>
                    <li class="overlay"><img src="<?php echo $thumb; ?>"  class="slide"  alt="Cris"/></li>    
                <?php else : ?>	
                    <li class="overlay"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.png" height="918px" class="slide"  alt=""/></li>
                <?php endif; 
            endwhile;
        endif; ?>
        </ul>
        <!--End slides-->
 
        <!--Slides inner-->
         <div class="slidesInner">
             <!-- Logo lotus-->
             <div class="logomarca"></div>
             <!--End Lotus-->
 
            <!--Socials slider-->
             <ul class="socialsSlider">
                 <li><a href="https://www.facebook.com/Cris-Nunes-461102784301526/"><i class="icon-facebook"></i></a></li>
                 <li><a href="https://www.instagram.com/crisnunescoach"><i class="icon-instagram"></i></a></li>
             </ul>
          <!--End socials slider-->
 
         </div>
        <!--End slides inner-->
     </div>
    <!--End main slider-->
</div>
<!--End main slider holder-->
<section  class="tCenter">
    
    <!-- section Sobre -->
    <div id="sobre" class="aboutIntro bgGreyDark ofsTop">
        <div class="container clearfix">
            <div class="aboutIntroContent">
                <?php the_field( 'conteudosobre', 'option' ); ?>
            </div>
        </div>
        <div class="imagemfixa">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cris-nunes.png"  alt="Coach Cris Nunes"/>
        </div>
    </div>
    <!--fim section sobre-->

    <!--call to action -->
    <div id="call" class="shorten clearfix">
        <div class="shortenInner">
            <div class="servSht">
                <div class="servImg overlay"></div>
                <div class="inner">
                    <h1>Psicologia Positiva</h1>	
                </div>
            </div>
            <div class="worksSht">
                <div class="workImg overlay"></div>
                <div class="inner">
                    <h1>Coach Emocional</h1>
                </div>
            </div>
        </div>

        <div class="shortenBtn clearfix">
            <div class="servBtn">
                <a class="scroll" href="http://agenciaalca.com/projetos/crisnunes/psicologia-positiva/">+</a>	
            </div>
            <div class="workBtn">
                <a class="scroll" href="http://agenciaalca.com/projetos/crisnunes/coach-emocional/">+</a>	
            </div>
        </div>
    </div><!-- fim call to action -->
</section>

<!--Blog section-->
<section id="blog" class="tCenter ">
    <div class="blogHolder  ofsTop ofsBottom ">
        <div class="title dark ">
            <h1><span class="plus">BLOG</span></h1>
        </div>
        <div class="container clearfix">
        <div class="latestHolder margTop clearfix tLeft">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="postLarge last one-third column">
                <div class="postContent">
                    <div class="postTitle">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <div class="postMeta">
                            <span class="metaCategory"><?php the_category(); ?></span>
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
            <h3>Siga no instagram<a href="https://www.instagram.com/crisnunescoach" target="_blank"><span>@crisnunescoach</span></a></h3>
            <br>
            <div class="instaIco"><i class="icon-facebook"></i></div>
            <h3>Siga no facebook<span><a href="https://www.facebook.com/Cris-Nunes-461102784301526/" target="_blank"><span>Cris Nunes Coach</span></a></h3>
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
                    
                        <div class="inputColumns clearfix">
                        <form action="<?php echo get_template_directory_uri(); ?>/send.php" method="post">
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
                                    <textarea rows="5" cols="45" name="message" id="message" placeholder="Mensagem *" ></textarea>
                                </div>
                                <div class="column4">
                                    <div id="submit"  class="btn">Enviar</div>
                                </div>
                            </div>
                        </form>
                        
								
                            <div class="column2">
                                <div class="columnInner">
                                    <p><?php the_field( 'endereco', 'option' ); ?><br><br>
                                        <?php the_field( 'telefone-1', 'option' ); ?><br>
                                        <?php the_field( 'telefone-2', 'option' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div id="success"><h2>Sua mensagem foi enviada!</h2></div>
						<div id="error"><h2>Mensagem não enviada, tente novamente!.</h2></div>
                    
                </div>
            </div>
        </div>
    </div>
</section><!--End contato -->

<?php include_once 'footer.php'; ?>

