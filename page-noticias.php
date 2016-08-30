<?php
/*
Template Name: Noticias
*/
?>
<?php get_template_part('includes/header'); ?>
    <div id="preloader"></div><!--Precargador-->
    <hr>
    <div class="sticky">
        <div class="container-fluid text-center section-header">
            <!--<h1>Noticias Mariana meneses</h1>
            <p>En esta Sección encontraras información sobre eventos y producciones de la marca.</p>-->
        </div>
        <section class="container noticia">
            <ul class="row contenedor">              
                <?php tha_content_before(); ?>
                <?php tha_content_top(); ?>
                <?php
                    if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
                    } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
                        $paged = get_query_var('page');
                    } else {
                        $paged = 1;
                    }

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => get_option('posts_per_page'),
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => true
                    );

                    $custom_query = new WP_Query( $args ); 
                    if ( $custom_query->have_posts() ) :
                        while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                <?php tha_entry_before(); ?>
                <li id="post-<?php the_ID(); ?>" class="quote col-xs-12 col-sm-6 col-md-3 col-lg-4 columna sizer">
                   <ul class="row contenido" >                       
                        <li class="img"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('noticia'); } ?></li>
                        <li class="text-center">
                            <h3><?php echo the_title();?></h3>
                            <p><?php echo get_the_excerpt(25);?></p>
                            <a href="<?php the_permalink();?>" class="button-xl">Ver más</a>
                        </li>
                   </ul>
                   <div class="clear-fix"></div>
                </li>
                    <?php endwhile;?> 
                <?php tha_entry_after(); ?>
                </ul>
        </section>
        <div class="container text-center">
            <?php //Llamada a funcion de paginación
            if ( function_exists('mm_pagination') ) {
              mm_pagination( $custom_query );
            } ?>
            <?php else: ?>
                  <h2>No encontramos lo que buscas</h2>
            <?php endif; ?>   
        </div>
<?php //dynamic_sidebar('noticias-widget-area'); ?><!--Llamada al sidebar-->
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?><!--Llamada al footer-->
