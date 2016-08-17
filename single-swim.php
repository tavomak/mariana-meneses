<?php
/*
Single Swim
*/
?>
<?php get_template_part('includes/header'); ?>
<div id="preloader"></div>
    <hr>    
    <section class="coleccion">
       <?php tha_content_before(); ?>
        <?php tha_content_top(); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        
        <?php tha_entry_before(); ?>
        <?php
        $images = get_field('swim');
        if( $images ): ?>
       
        <ul class="row contenedor">
            <li class="columna columna-2 texto-cont">
                <div class="texto">
                    <h2><?php the_title()?></h2>
                    <hr class="titulo">
                    <p><?php the_content()?></p>
                </div>
            </li>
            <?php foreach( $images as $image ): ?>
            <li class="img columna sizer cb">
                <a href="<?php echo $image['url']; ?>" data-gallery>
                    <img src="<?php echo $image['sizes']['noticia']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                
                <div class="cb"></div>
            </li>
            <li class="cb"></li>
            <?php endforeach; ?>
        </ul>
        
<?php endif; ?>

<?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
   
    </section>
    
    <hr>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
