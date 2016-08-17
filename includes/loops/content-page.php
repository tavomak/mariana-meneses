<?php
/*
The Page Loop
=============
*/
?>

    <ul >      

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
                      <li class="col-xs-6 first">
                            <div class="row">
                                <h1><?php echo the_title();?></h1>
                                <hr class="titulo">
                            </div>
                            <div class="row">
                                <p><?php echo get_the_excerpt(25);?></p>
                            </div>
                            <div class="row">
                                <a href="<?php the_permalink();?>" class="button-xl">Ver más</a>
                            </div>
                        </li>          
                        <li id="col-xs-6 secont">                            
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                      </li>                      
                  </ul>
               </li>

            <?php tha_entry_bottom(); ?>
        <?php endwhile;?>
        
        <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
               		<?php
                $orig_query = $wp_query; // fix for pagination to work
                $wp_query = $custom_query;
                ?>
                <nav class="prev-next-posts text-center">
                   <ul class="list-inline">
                       <li>
                            <?php echo get_next_posts_link( '<< Anteriores...', $custom_query->max_num_pages ); ?>   
                       </li>
                       <li>
                           <?php echo get_previous_posts_link( '...Nuevas >>' ); ?>
                       </li>
                   </ul>
                </nav>
                		<?php
                $wp_query = $orig_query; // fix for pagination to work
                ?>
                	<?php endif; ?> 
                <?php
                wp_reset_postdata(); // reset the query 
                else:
                echo '<p>'.__('Lo sentimos, no existen los posts que buscas.').'</p>';
                endif;
                ?>
        
        <?php tha_entry_after(); ?>

    </ul>
