<?php get_template_part('includes/header'); ?>
    <div id="preloader"></div>
    <hr>
    <div class="container-fluid text-center section-header">
        <h1>Mariana Meneses Shop</h1>
        <p>En esta Sección encontraras productos que podras adquirir directamente desde el sitio web y pagar con tarjeta de credito.</p>
    </div>
    <hr>
<div class="container">
  <div class="row">

    <div class="">
      <div id="content" role="main">
        <?php tha_content_before(); ?>
        <div class="woocommerce">
            <?php woocommerce_content(); ?>
        </div>
      </div><!-- /#content -->      
    </div>
<!--
    <div class="visible-sm-* col-sm-3" id="sidebar" role="navigation">
        <?php dynamic_sidebar('woocommerce-widget-area'); ?>
    </div>-->

  </div><!-- /.row -->
</div><!-- /.container -->
    
    
    <hr>
    <?php get_template_part('includes/subfooter'); ?>
    <?php get_template_part('includes/footer'); ?>