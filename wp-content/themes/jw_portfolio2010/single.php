<?php get_header(); ?>
<!-- START SINGLE.PHP -->

<div id="content" class="clearfix">
    <div id="text">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        		<h2><?php the_title(); ?></h2>
    		
        		<div class="summary">
        		<?php echo( get('summary') ); ?>
        		</div>
        		<div class="entry">
        			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    			
        			<?php $link = get('link'); ?>
        			<?php if ( !empty($link) ) : ?>
                        <p>
                          <strong>Link: </strong><a href="<?php echo($link); ?>"><?php echo($link); ?></a>
                        </p>
                    <?php endif; ?>
                
        			<?php echo( get_image('image04') ); ?>
    			
        		</div><!-- END .entry -->
        	</div><!-- END #post-nr -->    
        
            <p id="back-link">
                <a href="<?php bloginfo('wpurl'); ?>/category/work/">« back</a>
            </p>
        
        <?php endwhile; else: ?>

        	<p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?>

    </div><!-- END #content -->

    <div id="images" class="clearfix">
        <?php echo( get_image('image01') ); ?>
        <?php echo( get_image('image02') ); ?>
        <?php echo( get_image('image03') ); ?>        
    </div>
    
</div><!-- END #content -->

<!-- END SINGLE.PHP -->
<?php get_footer(); ?>