<?php
$query = new WP_Query('category_name=Featured');
$query_count = $query->post_count;
?>

<div id="carousel-featured" class="carousel slide" data-ride="carousel" data-interval="10000">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ( $i = 0; $i < $query_count; $i++ ) : ?>
            <li data-target="#carousel-featured" data-slide-to="<?= $i ?>" <?=($i == 0 ) ? 'class="active"' : '';?> ></li>
        <?php endfor; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
            $i = 0;
    $make_active = false;
    $colors = array('#e9e8bd', '#bcd2e9', '#c6e8b9', '#ddc8ed');
    while ( $query->have_posts() ) : $query->the_post(); ?>
      <div style="background-image: url('<?=get_post_meta( get_the_ID(), '_carousel_image_url', true ) ?>'); background-color: <?=$colors[$i]?>;" class="item <?= ( $make_active = ( $i || $make_active ) ) ? '' : 'active';?>">
        <div class="carousel-caption container-fluid">
          <div class="row excerpt text-left">
            <div class="col-sm-offset-1 col-sm-10 col-xs-12 excerpt-content">
              <h3><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
              <p> <?php the_excerpt_max_charlength(150); ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php /* Controls cycle through the array */ ?>
    <?php $i = (++$i > count($colors) - 1 ) ? 0 : $i; ?>
    <?php endwhile; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-featured" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-featured" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
