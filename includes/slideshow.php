
<?php
$wp_query = new WP_Query(array('post_type' => array( 'post', 'electra', 'swim' ),'posts_per_page'=>5));
$query_count = $wp_query->post_count;
?>

<section id="carousel-1" data-ride="carousel" class="carousel slide">

    <div class="carousel-inner">
        <?php
        $i = 0;
        $make_active = false;
        $colors = array('#e9e8bd', '#bcd2e9', '#c6e8b9', '#ddc8ed');

        while ($wp_query->have_posts()): $wp_query->the_post(); ?>

            <div class="item <?= ( $make_active = ( $i || $make_active ) ) ? '' : 'active';?>">
                <div class="color"></div>
                <div class="helper">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                </div>
                <div class="caption">
                   <div class="title-pr">
                       <?php $post_type = get_post_type( $post->ID );
                        if ( $post->post_type == 'post' ) {
                            echo '<h1>noticia</h1>';
                        }else if($post->post_type == 'electra') {
                            echo '<a href="' .get_post_type_archive_link( 'electra'). ' "><img src="'.get_bloginfo('stylesheet_directory').'/img/mmelectra.png" class="colet-img" /></a>';
                        }else{
                            echo '<a href="' .get_post_type_archive_link( 'swim'). ' "><img src="'.get_bloginfo('stylesheet_directory').'/img/mmswim.png" class="colet-img" /></a>';
                        }
                       ;?>
                    </div>
                    <h2><?php echo the_title();?></h2>
                    <p>
                        <?php echo get_the_excerpt();?>
                    </p>
                    <a href="<?php the_permalink();?>" class="button">Ver más</a>
                    <hr class="visible-xs">
                </div>
            </div>
        <?php $i = (++$i > count($colors) - 1 ) ? 0 : $i; ?>
        <?php endwhile; ?>
    </div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ( $i = 0; $i < $query_count; $i++ ) : ?>
            <li data-target="#carousel-1" data-slide-to="<?= $i ?>" <?=($i == 0 ) ? 'class="active"' : '';?> ></li>
        <?php endfor; ?>
    </ol>

</section>
