<?php
get_header();
?>

<div id="container">
  	<h1>Welcome to Custom Full Width Page!</h1>
         <a href="<?php echo site_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                           

	<div id="body">
            
            
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>
        
        </div>
    <?php get_sidebar(); ?>    
	<p class="footer">
             
             CopyLeft@SanjibSinha
             
         </p>
</div>

<?php

 get_footer();


