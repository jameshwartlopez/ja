<?php get_header(); ?>
<div id="main">
    <div id="content">
        <h1>Main Front-page.php ne cya</h1>
        <?php
          if(has_post_thumbnail()){
          //  the_post_thumbnail( );
             get_the_post_thumbnail( );
          }

        ?>
        <?php echo ja_list_child_pages(); ?>
    </div>
  </div>
<div id="delimiter"></div>
<?php get_footer(); ?>