<?php include_once 'header.php'; ?>


<?php
		if ( have_rows( 'slider', 'option' ) ):
	?>
		<div class="mainSliderHolder">
            <div class="mainSlider flexslider">
                <ul class="slides">
				<?php
					$cont = 0;
                    while ( have_rows( 'slider', 'option' ) ) : the_row();
                        $imagem = get_sub_field( 'imagem', 'option' );
						$descricao = get_sub_field( 'descricao', 'option' );
						$size = 'thumbnail';
						$thumb = $imagem['sizes'][$size];

						$cont++;
				
                    if ( !empty( $imagem ) ): ?>
                        <li class="overlay"><img src="<?php echo $thumb; ?>" height="918px" class="slide"  alt="Cris"/></li>    
                    <?php else : ?>	
                        <li class="overlay"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.png" height="918px" class="slide"  alt=""/></li>
                    <?php endif; ?>
                </ul>
                        
                <div class="slidesInner">
                    <div class="logomarca"></div>
                    <p><?php echo $descricao; ?></p>
                </div>

                <ul class="socialsSlider">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
                <?php endwhile; ?>
            </div>
        </div>
    <?php else :
        echo 'nada aqui tem';
	endif;
?>

<section  class="tCenter">
    
    <!-- section Sobre -->
    <div id="sobre" class="aboutIntro bgGreyDark  ofsTop ofsBottom margLBottom">
        <div class="container clearfix">
            
            <div class="aboutIntroContent">
                <h1>Missão</h1>
                <p>
		Fazer com que o cliente venha a pensar sobre a sua essência e o seu propósito de vida, motivacionais que o levam a querer lutar por uma
		causa, uma mudança de vida, ou alguma conquista específica. Mostrando seu propósito potencial que muitas das vezes encontra-se escondido.
                </p>
		
		<h1>Visão</h1>
                <p>
		Empenhar na valorização humana, trazendo a importância do EU em cada ser, aperfeiçoando cada dia mais em metas e propósitos, trazendo
		a satisfação pessoal.
                </p>

		<h1>Valores</h1>
                <p>
		- Humanidade: Acreditar que todos são iguais e merecedores de conquistas.</br>
		- Integridade: Ser sincero e defender aquilo em que acredita.</br>
		- Visão Holística: ter capacidade de compreender a todos.</br>
		- Gratidão: agradecer pelas conquistas.
                </p>
                
            </div>
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
                                    <p>Av T7, nº 371, Ed Lourenço Office, Sala 2101 a 2108<br><br>
                                        (62) 62 3215-1780<br>
                                        (62) 62 9 9105-2705</p>
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

