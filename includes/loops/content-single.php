<?php
/*
The Single Posts Loop
=====================
*/
?> 
<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php tha_entry_before(); ?>
    
    <div class="container-fluid">
        <div class="single-img">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
        </div>
    </div>
    <div class="row">
        <h1><?php echo the_title();?></h1>
        <hr class="titulo">
        <p><?php echo get_the_content();?></p>
    </div>

<?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
