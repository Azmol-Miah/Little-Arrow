<?php

// STYLESHEETS AND JAVASCRIPT..................................................... //
function littlearrow_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'littlearrow_theme_styles');

function littlearrow_theme_javascript(){
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
    wp_enqueue_script('popper_js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true); 
}

add_action('wp_enqueue_scripts', 'littlearrow_theme_javascript');

function littlearrow_theme_front_javascript(){
    if(is_front_page()){
        wp_enqueue_script('little_arrow_js', get_template_directory_uri() . '/js/littlearrow.js', array('jquery'), '', true); 
    }
}

add_action('wp_enqueue_scripts','littlearrow_theme_front_javascript' );



// ADMIN PAGE......................................................................... //
function my_login_logo() { ?>
    <style>
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/login-logo.png);
		height:80px;
		width:100%;
		/* background-size: 320px 65px; */
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );



// THEME CUSTOMIZER..................................................................... //
require get_template_directory() . '/inc/customizer.php';



// WIDGETS............................................................................. //
function littlearrow_init_widget($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>'
    ));
}

add_action('widgets_init', 'littlearrow_init_widget');



