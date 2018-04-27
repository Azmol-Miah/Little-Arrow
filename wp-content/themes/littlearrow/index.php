<?php get_header(); ?>

   <div class="container">
        <?php if( have_posts() ) : while ( have_post() ) : the_post(); ?>
            <p><?php the_content(); ?></p>
        <?php endwhile; else: ?>
            <p>Sorry no pagefound.</p>
        <?php endif; ?>
   </div>     
       

<?php get_footer(); ?>