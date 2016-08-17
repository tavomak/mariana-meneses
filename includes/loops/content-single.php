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
    

    <ul class="row">
           <li >
                  <ul class="row">
                      <li >
                            <h1><?php echo the_title();?></h1>
                            <hr class="titulo">
                            <p><?php echo get_the_content();?></p>
                            <a href="<?php the_permalink();?>" class="button">Ver más</a>
                        </li>          
                        <li >                            
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('noticia'); } ?>
                      </li>                      
                  </ul>
               </li>
    </ul>

<?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
