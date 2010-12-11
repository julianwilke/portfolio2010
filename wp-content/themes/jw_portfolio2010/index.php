<?php get_header(); ?>
<?php
  $about_page = get_page_by_title('About');
  $about_page_id = $about_page->ID;
  $about_url = get_page_link($about_page_id);
    
  $work_cat_id = get_cat_ID('Work');
  $work_url = get_category_link($work_cat_id);
  
  $skills_page = get_page_by_title('Skills');
  $skills_page_id = $skills_page->ID;  
  $skills_url = get_page_link($skills_page_id);
?>
<!-- START 404.PHP -->

<div id="content">

  <div id="text">

    <h2>Page not found.</h2>
    <p>
      Looks like you took a wrong turn on Route 404. Unfortunately, there is nothing here to see.
    </p>
    <p>
      But why don't you check out the pages <a href="<?php echo($about_url); ?>">About</a>, <a href="<?php echo($work_url); ?>">Work</a> and <a href="<?php echo($skills_url); ?>">Skills</a> instead.
  	</p>
  </div><!-- END #text -->

</div><!-- END #content -->

<!-- END 404.PHP -->
<?php get_footer(); ?>