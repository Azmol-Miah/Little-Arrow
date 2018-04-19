<?php get_header(); ?>

<header id="blog-header">
    <div class="container py-5">
        
            <div class="pb-3 text-center blog-header">
                <h1 class="display-4" style="color:#fff"><?php echo get_theme_mod('qa_heading', 'Questions And Answers') ?></h1>
                <p class="lead"><?php echo get_theme_mod('qa_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.') ?></p>
            </div>
        
    </div>
</header>
<section id="qa">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-9">
                <?php 
                    $paged = ( get_query_var('paged') ) ? ( get_query_var('paged') ) : 1;

                        $args = array(
                            'post_type' => 'post',
                            'post_per_page' => 8,
                            'paged' => $paged,
                        );

                    $wp_query = new WP_Query( $args );

                    if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
                ?>
                            
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 style="font-weight:600;">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="lead">
                            <?php the_field('sub_heading') ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <?php the_author_posts_link(); ?> <?php the_time('F j, Y'); ?></p>
                </div>
                <hr>
                <?php endwhile; else: ?>
                    <p>Sorr, no questions and answers yet.</p>
                <?php endif; ?>
            </div>
            <div class="col-sm-3 blog-sidebar">
                <?php if(is_active_sidebar('sidebar')): ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div><!-- /.blog-sidebar -->
        </div>

        <div class=" pt-4 text-center">  
            <?php next_posts_link('<div class="btn btn-outline-dark">Older Q & A &rarr;</div>'); ?>
            <?php previous_posts_link('<div class="btn btn-outline-dark">&larr; Newer Q & A</div>'); ?>      
        </div>

    </div>
</section>

<?php get_footer(); ?>