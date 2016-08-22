<?php tha_footer_before(); ?>
<div class="container-fluid wrap-footer">
        <hr/>
<footer class="container site-footer">
    <?php tha_footer_top(); ?>
    <div class="text-center">
        <!--<h1>Community Driven</h1>
        <p class="visit">Visita las redes sociales para mantenerte al dia de todas las actividades.</p>-->
    </div>
    <hr/>
    <div class="row text-center social-footer">
        <div class="fl social-icon">
            <a href="https://www.instagram.com/marianameneses/">
                <img src="<?php bloginfo('template_directory'); ?>/img/ins-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/img/ins-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/img/ins-logo.jpg '" alt="https://www.instagram.com/marianameneses/" class="icon">
                <!--<p>instagram</p>-->
            </a>
        </div>
        <div class="fl social-icon">
            <a href="https://www.facebook.com/mm.estilo/">
              <img src="<?php bloginfo('template_directory'); ?>/img/fac-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/img/fac-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/img/fac-logo.jpg '" alt="https://www.facebook.com/mm.estilo/" class="icon">
              <!--<p>facebook</p>-->
            </a>
        </div>
        <div class="fl social-icon">
          <a href="https://twitter.com/mm_electra">
           <img src="<?php bloginfo('template_directory'); ?>/img/twi-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/img/twi-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/img/twi-logo.jpg '" alt="https://twitter.com/mm_electra" class="icon">
            <!--<p>twitter</p>-->
            </a>
        </div>
    </div>
    <div class="row">
        <?//php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <hr/>
    <div class="row text-center">
        <div class="col-lg-12 site-sub-footer">
           <ul>
               <li class="list-inline">
                    <p class="copy">&copy;<?php echo date('Y'); ?>
                        <a class="copy" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?> Todos los derechos reservados</a>
                    </p>
               </li>
               <li class="list-inline est">
                   <a href="">
                    <p class="list-inline" >Designed and coded by</p>
                    <img class="list-inline" src="<?php bloginfo('template_directory'); ?>/img/estela-logo.png" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/img/estela-logo-hover.png'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/img/estela-logo.png '" alt="Estela estudio de diseño">
                   </a>
               </li>
           </ul>
        </div>
    </div>
    <?php tha_footer_bottom(); ?>
</footer>
</div>
<?php tha_footer_after(); ?>
<?php wp_footer(); ?>
<?php tha_body_bottom(); ?>
