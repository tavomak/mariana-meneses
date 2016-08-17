<?php get_template_part('includes/header'); ?>
<div id="preloader"></div>
<h1>Esto es single</h1>
<div class="container">
    <div class="row">

        <div class="col-sm-10">
            <div id="content" role="main">
                <?php get_template_part('includes/loops/content', 'single'); ?>
            </div><!-- /#content -->
        </div>

        <div class="col-sm-2" id="sidebar" role="navigation">
            <?php get_template_part('includes/sidebar'); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>
