<!DOCTYPE html>
<?php tha_html_before(); ?>
<html class="no-js">

<head>
    <?php tha_head_top(); ?>
        <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link runat="server" rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
        <link runat="server" rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/ico" />-->
        <?php tha_head_bottom(); ?>
        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>

    <!--[if lt IE 8]>
    <div class="alert alert-warning">
        You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </div>
    <![endif]-->
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-upper">
                    <span class="sr-only">menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/mm-logo.jpg" alt="Mariana Meneses"><!--<span class="title">mariana meneses</span>--></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-upper">
                <ul class="list-inline navbar-right">
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 3,
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
                </ul>
            </div>
        </div>
    </nav>
