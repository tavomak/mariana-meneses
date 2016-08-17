<?php get_template_part('includes/header'); ?>
<div id="preloader"></div>
    <hr>    
    <section class="page-content">       
       <?php tha_content_before(); ?>
        <?php tha_content_top(); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        
        <?php tha_entry_before(); ?>
       
        <div class="container">
                <div class="row">
                    <h2><?php the_title()?></h2>
                    <?php the_content()?>
                </div>
        </div>

<?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
   
    </section>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
