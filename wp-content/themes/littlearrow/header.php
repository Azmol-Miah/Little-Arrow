<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
        <style>
            #showcase{
                background: linear-gradient(rgba(21, 22, 22, 0.45), rgba(21, 22, 22, 0.45)), url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/home.jpg'); ?>) no-repeat center;
            }
            #classes{
                background: linear-gradient(rgba(21, 22, 22, 0.555), rgba(21, 22, 22, 0.589)), url(<?php echo get_theme_mod('classes_image', get_bloginfo('template_url').'/img/qurantwo.jpg'); ?>) no-repeat center;

            }
        </style>
        <title>Little Arrow | Ask Mufti</title>
    </head>

    <body <?php body_class(); ?>>
            <!-- Needs padding in mobile view -->
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container">
                <a href="<?php echo get_home_url(); ?>" class="navbar-brand">Little Arrow</a>
                <?php if(is_front_page()): ?>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto" id="navContainer">
                            <li class="nav-item">
                                <a onclick="initScroll('about'); return false;" href="#about" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="initScroll('qa'); return false;" href="#qa" class="nav-link">Q &AMP; A</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="initScroll('news-letter'); return false;" href="#news-letter" class="nav-link">News</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="initScroll('classes'); return false;" href="#classes" class="nav-link">Classes</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="initScroll('qaida'); return false;" href="#qaida" class="nav-link">Qaida</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="initScroll('contact'); return false;" href="#contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </nav>