<?php get_template_part('includes/header'); ?>
<div id="preloader"></div>
<hr>

<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php tha_entry_before(); ?>

    <div class="container-fluid contenido-single-post">
       <div class="row">
            <div class="single-img col-md-4">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            </div>
            <div class="row col-md-8">
                <h1><?php echo the_title();?></h1>
                <hr class="titulo">
                <p><?php echo get_the_content();?></p>
            </div>
       </div>
    </div>
    <?php get_template_part('includes/loops/reciente'); ?>
<?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>

<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
