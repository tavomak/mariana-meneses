<?php get_template_part('includes/header'); ?>
    <div id="preloader"></div><!--Precargador-->
    <hr>
    <div class="container-fluid text-center section-header">
       <img src="<?php bloginfo('template_directory'); ?>/img/mmelectra.png" alt="Electra">
        <h1>Colección Electra</h1>
        <p>En esta Sección encontraras información sobre eventos y producciones de la marca.</p>
    </div>
    <section class="container">
        <ul>
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
                'post_type' => 'electra',
                'posts_per_page' => get_option('posts_per_page'),
                'paged' => $paged,
                'post_status' => 'publish',
                'ignore_sticky_posts' => true
            );
            $custom_query = new WP_Query( $args ); 
            if ( $custom_query->have_posts() ) :
                while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

            <?php tha_entry_before(); ?>
            <li class="hijo">
                <ul class="row">
                    <li class="col-sm-6 first">
                        <div class="row">
                            <h2><?php echo the_title();?></h2>
                            <hr class="titulo">
                        </div>
                        <div class="row">
                            <p><?php echo get_the_excerpt(25);?></p>
                        </div>
                        <div class="row">
                            <a href="<?php the_permalink();?>" class="button-xl">Ver más</a>
                        </div>
                    </li>          
                    <li id="col-sm-6 secont">                            
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('coleccion'); } ?>
                    </li>
                </ul>
            </li>
        <?php tha_entry_bottom(); ?>
            <?php endwhile;?>
        <?php tha_entry_after(); ?>
        </ul>
    </section>
    <div class="container text-center"><!--Contenedor de paginación-->
        <?php //Llamada a funcion de paginación
        if ( function_exists('mm_pagination') ) {
          mm_pagination( $custom_query );
        } ?>
        <?php else: ?>
              <h2>No encontramos lo que buscas</h2>
        <?php endif; ?>
    </div>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?><!--Llamada al footer-->
