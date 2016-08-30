<?php
/*
The te podria interesar Loop
=====================
*/
?>
<div class="container-fluid reciente">
               <div class="row reciente-title">
                    <h3>Otras noticias:</h3>
                   <hr>
               </div>
               <div class="row">
                    <?php tha_content_before(); ?>
                    <?php tha_content_top(); ?>

                    <?php
                    $wp_query = new WP_Query(array('post_type'=>'post' ,'showposts'=>4));
                    while($wp_query->have_posts()):
                    $wp_query->the_post();
                    $do_not_duplicate = $post->ID;  ?>
                    <article class="col-sm-3">
                       <ul class="">
                            <li class="thu-content">
                               <a href="<?php the_permalink();?>">
                                   <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                                    <div class="clip-mask"></div>
                               </a>
                            </li>
                            <li class="title-articulo">
                                <a href="<?php the_permalink();?>">
                                    <h4><?php echo the_title();?></h4>
                                </a>
                            </li>
                       </ul>
                    </article>
                    <?php tha_entry_bottom(); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <?php tha_entry_after(); ?>

                </div>

           </div><!-- TALLERES -->
