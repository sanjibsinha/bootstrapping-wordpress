<?php
/*
 * Template Name: Blog Post Template
 * Description: Page template without sidebar
 */
get_header('blog');
?>            
            
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <?php the_content(); ?>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>
      </div>
    <?php get_sidebar(); ?>    
	
</div>
<?php

 get_footer('blog');


