<?php
/*
Template Name: Contacto
*/
?>
<?php get_template_part('includes/header'); ?>
<hr>
<div class="container-fluid text-center section-header">
    <!--<h1>Contacto</h1>
    <p>En esta Sección podrás solicitar información sobre eventos y producciones de la marca.</p>-->
</div>
<div class="container">
  <div class="row">

    <div class="">
      <div id="content" role="main">
        <?php tha_content_before(); ?>
        <?php 
          if ( have_posts() ) {
              while ( have_posts() ) {
                  the_post(); 
                   the_content(); 
                  } // end while
          } // end if
        ?>
      </div><!-- /#content -->
    </div>
    <!--<div class="col-sm-3" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
    </div>-->
  </div><!-- /.row -->
</div><!-- /.container -->
<br>
<br>
<br>
<br>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
