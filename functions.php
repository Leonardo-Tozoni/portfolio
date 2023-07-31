<?php
/**
 * Alpina Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Alp Cody
 * @since 1.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) $content_width = 900;

function wpmidia_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Bem-vindo | Alpina Digital Branding', 'wpmidia_custom_dashboard_help');
}
function wpmidia_custom_dashboard_help() {
	echo '<center><div class="container" style="background-color: #000;width: 100%;height: 500px;">
	<a href="https://alpina.digital" target="_blank"><img src="https://alpina.digital/wp-content/themes/alpina_theme/assets/imgs/logo-alpina.svg" class="logotipo" style="margin: 65px 0 0 0">
	<br>
	<h2 style="font-size: 20px;font-weight: 900;color: white">Alpina</h2></a>
	<br>
	<br>
	<h4 style="font-size: 16px;font-weight: 400;color: white">Em caso de dúvida ou solicitações de mudanças no site, acesse nossa central de chamados.</h4>
	<br>
	<br>
	<h4 style="font-size: 16px;font-weight: 400;color: white">Login</h4>
	<a href="https://alpinaweb.tomticket.com" target="_blank"><button>Entrar</button></a>
	<br>
	<h4><a href="https://alpinaweb.tomticket.com/helpdesk/novasenha" target="_blank">Esqueceu sua senha?</a></h4>
	<br>
	<h4 style="font-size: 16px;font-weight: 400;color: white">Não é cadastrado no painel de suporte?</h4>
	<a href="https://alpinaweb.tomticket.com/helpdesk/cadastro" target="_blank">Clique aqui para cadastrar-se</a>
	</div></center>';
}
add_action( 'wp_dashboard_setup', 'wpmidia_custom_dashboard_widgets' );


function codyframe_register_styles() {

  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style( 'codyframe', get_template_directory_uri() . '/main/assets/css/style.css?v='.time(), array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'codyframe_register_styles' );

function codyframe_register_scripts() {

  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_script( 'codyframe', get_template_directory_uri() . '/main/assets/js/scripts.js?v='.time(), array(), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'codyframe_register_scripts' );

// no-js support
function codyframe_js_support() {
  ?>
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <?php
}

add_action( 'wp_print_scripts', 'codyframe_js_support');

/**
 * Alpina Theme Classes.
 */
// require_once get_template_directory() . '/core/bootstrap-nav.php';
require_once get_template_directory() . '/core/custom-post-type.php';
require_once get_template_directory() . '/core/metabox.php';
require_once get_template_directory() . '/core/taxonomy.php';
// require_once get_template_directory() . '/core/tutoriais.php';


if ( ! function_exists( 'alp_setup' ) ) :
/**
 * Alpina Theme setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Alpina theme 2.1
 */
function alp_setup() {

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Support wp_title().
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'width1100', 1100, 620, true );
	add_image_size( 'width780', 780, 700, true );

	// Register nav menus.
	register_nav_menus(
		array(
			'main-menu' => __( 'Menu Principal', 'alp' ),
			'footer-menu' => __( 'Menu Footer', 'alp' )
		) 
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
}
endif; // alp_setup
add_action( 'after_setup_theme', 'alp_setup' );

/**
 * Register three Alpina Theme widget areas.
 *
 * @since Alpina theme 2.1
 */
function alp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar #1', 'alp' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Conteúdo da sidebar #1.', 'alp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar #2', 'alp' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Conteúdo da sidebar #2.', 'alp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar #3', 'alp' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Conteúdo da sidebar #3.', 'alp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'alp_widgets_init' );

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Alpina Theme 2.1
 */
function alp_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alp_scripts' );

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Alpina theme 2.1
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function alp_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} else {
		$classes[] = 'masthead-fixed';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
		$classes[] = 'full-width';
}

if ( is_active_sidebar( 'sidebar-3' ) ) {
	$classes[] = 'footer-widgets';
}

if ( is_singular() && ! is_front_page() ) {
	$classes[] = 'singular';
}

if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
	$classes[] = 'slider';
} elseif ( is_front_page() ) {
	$classes[] = 'grid';
}

return $classes;
}
add_filter( 'body_class', 'alp_body_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Alpina theme 2.1
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function alp_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'alp' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'alp_wp_title', 10, 2 );

// Remover alguns links desnecessários do head
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');

// Custom WordPress Login Logo
function alpina_login_logo() {
	echo '<style type="text/css">.login h1 a { background-image:url(http://alpinaweb.com.br/imagens/logotipo-alpinaweb.png) !important; background-size: 110px 80px; width: 110px; height: 80px; margin: 0 auto;}</style>';
}
add_action('login_head', 'alpina_login_logo');

function loginpage_custom_link() {
	return 'alpinaweb.com.br';
}
add_filter('login_headerurl','loginpage_custom_link');

/* remover versao */
function change_footer_version() {
	return ' ';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );

/* remover ajuda */
function hide_help() {
	echo '<style type="text/css">
            #contextual-help-link-wrap, .updated.fade, .update-nag { display: none !important; }
	</style>';
}
add_action('admin_head', 'hide_help');

/* remover texto rodapé */
add_filter('admin_footer_text', 'open_source');
function open_source() {
	echo 'Alpina Digital Branding';
}

//Remove  WordPress Welcome Panel
add_action( 'load-index.php', 'remove_welcome_panel' );

function remove_welcome_panel()
{
	remove_action('welcome_panel', 'wp_welcome_panel');
	$user_id = get_current_user_id();
	if (0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) ) {
		update_user_meta( $user_id, 'show_welcome_panel', 0 );
	}
}

// Remove script de emoji icons
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove script embed do head
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//Remove title dos links do menu
function my_menu_notitle( $menu ){
	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/* LINK PARA O SUPORTE DA ALPINA NA BARRA DO ADMIN */
function wp_admin_bar_new_item() {
	global $wp_admin_bar;
	$wp_admin_bar->add_menu(array(
		'id' => 'wp-admin-bar-new-item',
		'title' => __('Suporte Alpina'),
		'href' => 'https://alpinaweb.tomticket.com/'
	));
}
add_action('wp_before_admin_bar_render', 'wp_admin_bar_new_item');
/* LINK PARA O SUPORTE DA ALPINA NA BARRA DO ADMIN FIM */

/*ESCONDE MENSAGENS DO WORDPRESS E DE PLUGINS NO ADMIN*/
function pr_disable_admin_notices() {
	global $wp_filter;
	if ( !current_user_can('administrator') ) {
		unset( $wp_filter['admin_notices'] );
	}
}
add_action( 'admin_print_scripts', 'pr_disable_admin_notices' );
/*ESCONDE MENSAGENS DO WORDPRESS E DE PLUGINS NO ADMIN FIM*/

// Images url
function midiaSrc($image){
	echo get_stylesheet_directory_uri() . '/main/assets/imgs/'. $image;
}

// post per page

add_filter( 'pre_get_posts', 'custom_change_seguros_posts_per_page' );
/**
 * Change Posts Per Page for seguros Archive.
 * 
 * @param object $query data
 *
 */
function custom_change_seguros_posts_per_page( $query ) {

    if ( $query->is_post_type_archive( 'seguros' ) && ! is_admin() && $query->is_main_query() ) {
          $query->set( 'posts_per_page', '8' );
    }

    return $query;

}

// search 
function template_chooser($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'seguros' )
  {
    return locate_template('archive-seguros.php');
  }
  return $template;
}
add_filter('template_include', 'template_chooser');

// break after words

function wordBreak($string){
	$numOfSpaces = substr_count($string, ' ');
	if($numOfSpaces <= 1){
		return str_replace(' ', '<br>', $string);
	}else{
		$halfSpace = round(($numOfSpaces/2));
		$position = 0;
		for($i = 0; $i < strlen($string); $i++){
			if($string[$i] == ' '){
				$position +=1;
			}
			if($position == $halfSpace){
				return substr_replace($string, '<br>', $i, 0);
			}
		}
	}
}

// function add break
function addBreak($string){
	return str_replace('[break]', '<br><br>', $string);
}

add_action('wp_dashboard_setup', 'wpmidia_custom_dashboard_widgets_video');

function wpmidia_custom_dashboard_widgets_video() {
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget_video', 'Tutorial do painel administrativo', 'wpmidia_custom_dashboard_help_video');
}

function wpmidia_custom_dashboard_help_video() {
    echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/amP24sy2-Yc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}