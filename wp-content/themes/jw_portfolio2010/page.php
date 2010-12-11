<?php get_header(); ?>
<!-- START PAGE.PHP -->

<div id="content" class="clearfix">

  <div id="text">

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<div class="post" id="post-<?php the_ID(); ?>">
  	    <h2><?php the_title(); ?></h2>
  		<div class="entry">
  		    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
  		</div><!-- END .entry -->
  	</div><!-- END .post -->
  	<?php endwhile; endif; ?>
	
  </div><!-- END #text -->

  <div id="images" class="clearfix">
    <?php echo( get_image('image01') ); ?>
  </div><!-- END #images -->

</div><!-- END #content -->

<!-- END PAGE.PHP -->
<?php get_footer(); ?>