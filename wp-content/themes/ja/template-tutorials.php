<?php
/*
Template Name: Tutorials Page
*/

?>

<?php get_header(); ?>
<div id="main">
    <div id="content">
        <h1>Main Area ang page.php ni cya</h1>
        <?php 
            if (have_posts()) : 
                while (have_posts()) :?> 
                    <?php the_post(); ?> 
                    <h1><?php the_title(); ?></h1>
                    <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                    <p><?php the_content(__('(more...)')); ?></p>
                    <hr/> 
                    <?php 
                endwhile; 
            else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php 
            endif; ?>
    </div>
    <?php 
    query_posts('category_name='.get_the_title());
	if(have_posts()):
		while(have_posts()):
			the_post();
			the_content();
			comment_form();
		endwhile;
	endif;

    ?>
    <?php  ?>
      <?php get_sidebar(); ?>
</div>
<div id="delimiter"></div>
<?php get_footer(); ?>