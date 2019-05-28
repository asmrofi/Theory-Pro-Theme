<?php

/**
 * Template Name: Front Template
 */

?>

<?php get_header(); 

while(have_posts()){
	the_post();
	the_content();
}


?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
        
    the_tags();
   

    ?>
</div>

<?php get_footer();?>
