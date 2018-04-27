
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>     
<!-- About -->
<header id="about">
    <div class="container">
        
            <div class="text-center">
                <div class="p-5">
                  <h1 class="display-4"><?php the_title(); ?></h1>
                  <p class="lead"><?php the_field('sub_heading') ?></p>
                </div>
            </div>
        
    </div>
</header>

<section id="about-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-10 mx-auto">
                <p class="lead"><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else: ?>
    <p>Sorry, page not found.</p>
<?php endif; ?>
<?php get_footer(); ?>
