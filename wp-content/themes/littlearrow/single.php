
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- About -->
<header id="blog-header">
    <div class="container">
        
            <div class="text-left">
                <div class="py-5">
                  <h1 class="display-4"><?php the_title(); ?></h1>
                  <hr style="margin-top:1.5em;border-color:#fff!important;">
                  <p class="lead"><?php the_field('sub_heading') ?></p>
                </div>
            </div>
        
    </div>
</header>

<section id="about-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <p class="lead"><?php the_content(); ?></p>
                <hr>
                <p class="post-meta">Posted by <?php the_author_posts_link(); ?> <?php the_time('F j, Y'); ?></p>
            </div>
            <div class="col-sm-3 blog-sidebar">
                <?php if(is_active_sidebar('sidebar')): ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div><!-- /.blog-sidebar -->
        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
