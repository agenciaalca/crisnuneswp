<?php
/* * ************************************
 *  THEME SUPORT A THUMBNAILS
 * ************************************ */

function add_suport_theme() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_suport_theme');

/* * ************************************
 *  DEFINIR TAMANHO DE THUMBNAILS
 * ************************************ */

//function add_suport_theme() {
//	add_theme_support( 'post-thumbnails' );
//}
//add_action( 'after_setup_theme', 'add_suport_theme' );


/* * ************************************
 *  SIDEBAR
 * ************************************ */
function sidebar_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'sidebar_widgets_init');

/* * ************************************
 * Registro Menu Personalizado
 * ************************************ */
add_theme_support('menus');
register_nav_menus(array(
    'primary' => __('Menu header', 'menu-header'),
));


/* * ************************************
 *  INCLUSÃO DE SCRIPTS / CSS
 * ************************************ */

function geraCor() {
    $numeroAleatorio = mt_rand(1, 6);
    switch ($numeroAleatorio) {
        case 1:
            wp_enqueue_style('css-cor2', get_template_directory_uri() . '/assets/css/cor2.css');
            break;
        case 2:
            wp_enqueue_style('css-cor3', get_template_directory_uri() . '/assets/css/cor3.css');
            break;
        case 3:
            wp_enqueue_style('css-cor4', get_template_directory_uri() . '/assets/css/cor4.css');
            break;
        case 4:
            wp_enqueue_style('css-cor5', get_template_directory_uri() . '/assets/css/cor5.css');
            break;
        case 5:
            wp_enqueue_style('css-cor6', get_template_directory_uri() . '/assets/css/cor6.css');
            break;
        default:
            break;
    }
}

function wp_inclusao_styles() {
    // Carregando CSS header funçao nativa do wp ('nomedocss', caminho)
    wp_enqueue_style('font-css', get_template_directory_uri() . '/assets/css/font.css');
    wp_enqueue_style('fontello-css', get_template_directory_uri() . '/assets/css/fontello.css');
    wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui-1.8.23.custom.css');
    wp_enqueue_style('base-css', get_template_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style('skeleton-css', get_template_directory_uri() . '/assets/css/skeleton.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('magnific-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/assets/css/flexslider.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    geraCor();
}
add_action('wp_enqueue_scripts', 'wp_inclusao_styles');

function wp_inclusao_scripts() {
    //Carregando no footer
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.9.1.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-migrate-js', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.js', array('jquery'), '', true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), '', true);
    wp_enqueue_script('easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '', true);
    wp_enqueue_script('smooth-scroll-js', get_template_directory_uri() . '/assets/js/jquery.smooth-scroll.js', array('jquery'), '', true);
    wp_enqueue_script('quicksand-js', get_template_directory_uri() . '/assets/js/jquery.quicksand.js', array('jquery'), '', true);
    wp_enqueue_script('modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array('jquery'), '', true);
    wp_enqueue_script('magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), '', true);
    wp_enqueue_script('tweet-js', get_template_directory_uri() . '/assets/js/jquery.tweet.js', array('jquery'), '', true);
    wp_enqueue_script('parallax-js', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', array('jquery'), '', true);
    wp_enqueue_script('timer-js', get_template_directory_uri() . '/assets/js/jquery.timer.js', array('jquery'), '', true);
    wp_enqueue_script('appear-js', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array('jquery'), '', true);
    wp_enqueue_script('Placeholders-js', get_template_directory_uri() . '/assets/js/Placeholders.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-ui-1.8.23.custom-js', get_template_directory_uri() . '/assets/js/jquery-ui-1.8.23.custom.min.js', array('jquery'), '', true);
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'wp_inclusao_scripts');

/* -----------------------------------------------------
  PAGINAÇÃO
  -------------------------------------------------------- */
if (!function_exists('paginacao_blog')) :

    function paginacao_blog() {
        // Don't print empty markup if there's only one page.
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
            return;
        }
        $paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
        $pagenum_link = html_entity_decode(get_pagenum_link());
        $query_args = array();
        $url_parts = explode('?', $pagenum_link);

        if (isset($url_parts[1])) {
            wp_parse_str($url_parts[1], $query_args);
        }

        $pagenum_link = remove_query_arg(array_keys($query_args), $pagenum_link);
        $pagenum_link = trailingslashit($pagenum_link) . '%_%';
        $format = $GLOBALS['wp_rewrite']->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
        $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit('page/%#%', 'paged') : '?paged=%#%';

        // Set up paginated links.
        $links = paginate_links(array(
            'base' => $pagenum_link,
            'format' => $format,
            'total' => $GLOBALS['wp_query']->max_num_pages,
            'current' => $paged,
            'mid_size' => 1,
            'add_args' => array_map('urlencode', $query_args),
            'prev_text' => __('Previous'),
            'next_text' => __('Next'),
            'type' => 'array',
        ));

        if ($links) :
            ?>
            <div class="blog">
                <nav class="navigation paging-navigation text-center" role="navigation">
                    <h1 class="screen-reader-text"><?php _e(''); ?></h1>
                    <ul class="pagination">
                        <?php
                        foreach ($links as $pgl) {
                            echo "<li>$pgl</li>";
                        }
                        ?>
                    </ul>
                </nav><!-- .navigation -->
            </div>
            <?php
        endif;
    }
endif;

/* * ************************************
 *  Criando função do ACF Cunstom Type Field
 * ************************************ */
if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'Outras Opções*',
        'menu_title' => 'Outras Opções*',
        'menu_slug' => 'option-page',
        'capability' => 'edit_posts',
        'redirect' => true
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Formulário de contato',
        'menu_title' => 'Formulário de contato',
        'parent_slug' => 'option-page',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Slider',
        'menu_title' => 'Slider',
        'parent_slug' => 'option-page',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Sobre',
        'menu_title' => 'Sobre',
        'parent_slug' => 'option-page',
    ));
    
}
add_filter('init', 'my_custom_sizes');


/* * ************************************
 *  Recorte de imagem 
 * ************************************ */

function my_custom_sizes($sizes) {
    add_image_size('thumbnail', 600, 300, true);
    add_image_size('full', 1900, 1276, true);
    add_image_size('medium', 510, 340, true);
}
