<?php get_template_part('includes/header'); ?>
<div id="preloader"></div>
<h1>Esto es archive.php</h1>
        <section class="container">
           <div class="row">
                <ul class="col-xs-12 col-sm-8">
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
                        'post_type' => array( 'post', 'electra', 'swim' ),
                        'posts_per_page' => get_option('posts_per_page'),
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => true
                    );

                    $wp_query = new WP_Query($args);
                    if($wp_query->have_posts()):
                    while( $wp_query->have_posts() ) : $wp_query->the_post();?>

                    <?php tha_entry_before(); ?>
                    <li>
                        <div>
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                            <div >
                                <a href="<?php the_permalink();?>">
                                    <h3>
                                    <?php echo the_title();?>
                                    </h3>
                                </a>
                                <p>
                                    <?php echo get_the_excerpt();?>
                                </p>
                                <a href="<?php the_permalink();?>" class="button">Ver más...</a>
                                <hr class="visible-xs">
                            </div>
                        </div>
                    <?php tha_entry_bottom(); ?>
                    <?php endwhile;?>
                    <?php wp_reset_query(); ?>
                    <?php tha_entry_after(); ?>
                    </li>
                </ul>
                <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                    <?php get_template_part('includes/sidebar'); ?>
                </div>
            </div>
        </section>
        <div class="container text-center"><!--Contenedor de paginación-->
        <?php //Llamada a funcion de paginación
        if ( function_exists('mm_pagination') ) {
          mm_pagination( $wp_query );
        } ?>
        <?php else: ?>
              <h2>No encontramos lo que buscas</h2>
        <?php endif; ?>
        </div>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>