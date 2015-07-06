<?php get_header(); ?>
<div id="main">
    <div id="content">
        <h1>Main Area index.php</h1>
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

            <?php

                foreach (get_categories( ) as $category) {
                    echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name . ' with '  . $category->count . ' posts </a> </p> ';

                }
            ?>
    </div>
      <?php get_sidebar(); ?>
</div>
<div id="delimiter"></div>
<?php get_footer(); ?>