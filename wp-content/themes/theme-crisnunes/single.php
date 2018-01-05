<?php get_header(); ?>

<div class="container-fluid">
    <div class="header-single">
        <div class="container">
            <h1 class="titulo"><?php the_title(); ?></h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-8 col-sm-12 col-xs-12">
        <div class=" content">
            <?php if (has_post_thumbnail()) : ?>
                <div class="single-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>
                        <div class="info-post">
                            <p>
                                <strong class="corfonte">Postado por:</strong> <?php the_author(); ?> <strong class="corfonte">em</strong> <?php the_date(); ?>
                            </p>
                        </div>

                        <div class="content-post">
                            <?php the_content(); ?>
                        </div>
                        <?php
                    endwhile;
                else:
                    ?>
                    <div class="artigo">
                        <h2>Erro 404! Nada Encontrado</h2>
                        <a href="http://tonvalim.com.br" class="btn btn-custom">Voltar para página principal</a>
                    </div>            
                <?php endif; ?>  
            </div>
            <div class="navegacao">
                <?php
                the_post_navigation(array(
                    'screen_reader_text' => ' ',
                    'prev_text' => '               
				<span class="meta-nav" aria-hidden="true">' . __('&#171;	Post Anterior') . '</span>',
                    'next_text' => '
				<span class="meta-nav" aria-hidden="true">' . __('Próximo Post &#187;') . '</span>'
                ));
                ?>
            </div>

            <div class="palavras-chaves">
                <div class="categorias col-md-6 col-sm-12">
                    <h3>Categorias</h3>
                    <?php
                    $categories = get_the_category($post->ID);
                    foreach ($categories as $category) {
                        echo '<span><a href="' . esc_url(get_category_link($category->term_id))
                        . '">' . esc_html($category->name) . '</a></span>';
                    }
                    ?>
                </div>
                <div class="tags col-md-6 col-sm-12">
                    <h3>Tags</h3>
                    <?php the_tags('<span>', '</span><span>', '</span>'); ?>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="col-md-4 ">
        <?php get_sidebar(); ?>
    </div>-->
</div>
<?php get_footer(); ?>