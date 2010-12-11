<?php get_header(); ?>
<!-- START ARCHIVE.PHP -->

<div id="content" role="main" class="clearfix">

    <?php
    if (have_posts()) :
    ?>
 
    <div class="navigation">
    	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
    	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </div><!-- END .navigation -->
    

    <?php $post_nr_in_loop = 1; /* Initialize post counter. Used to enable special styling for first post. */ ?>
    
    <?php query_posts('orderby=meta_value&meta_key=work_order&order=DESC'); /* Custom Post Query */ ?>
    
    <?php while (have_posts()) : the_post(); ?>
      
    <?php $permalink = get_permalink(); ?>

    <div <?php first_post_check(); post_class('clearfix'); ?> >
          	    
    	<h3 id="post-<?php the_ID(); ?>">
    		<a href="<?php echo($permalink); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    	</h3>
	    <a href="<?php echo($permalink); ?>" title="<?php the_title_attribute(); ?>">
    	    <?php echo( get_image('thumbnail') ); ?>
    	</a>
        
    	<div class="entry">
          <?php the_excerpt(); ?>
    	    
    	    <a class="see-more-link" href="<?php echo($permalink); ?>" title="<?php the_title_attribute(); ?>">see more »</a>
    	</div>
    	
    </div>

    <?php endwhile; ?>
    
    <?php
    endif;
    
    wp_reset_query();
    ?>

</div><!-- END #content -->

<!-- END ARCHIVE.PHP -->
<?php get_footer(); ?>


