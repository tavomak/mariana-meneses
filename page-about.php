<?php
/*
Template Name: about
*/
?>
<?php get_template_part('includes/header'); ?>
    <div id="preloader"></div><!--Precargador-->
    <section class="about">
        <div class="wrap">
            <div class="container">
                <ul class="row">
                    <li class=" col-xs-6 ajuste-t" id="about">
                       <div class="row ajuste-m"></div>
                       <div class="row ajuste-m">
                            <h2>about mariana</h2>
                            <hr>
                            <p>
                                Mariana Meneses nació y vive en Caracas desde 1985, Cursó y terminó estudios de diseño gráfico en la escuela de comunicación visual Prodiseño en la misma ciudad y está comprometida con la creación visual y de moda desde entonces.
                            </p>
                       </div>
                       <div class="row ajuste-m"></div>
                    </li>
                    <li class="col-xs-6 col-m-offset-2 text-right">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about-mm.jpg" alt="">
                    </li>
                    <div class="clearfix visible-xs-block"></div>
                </ul>
            </div>
        </div>
        <div class="container resena">
            <p>
                Mariana Meneses empezó a hacer ropa en julio de 2010. Desde el primer día su propuesta formal y estética está centrada en explorar la silueta femenina y el contexto de la mujer en su día a día. La marca esta dividida en dos líneas pensadas con la intención de crear ropa para la mujer poderosa, independiente y segura de sí misma.
            </p>
        </div>
    </section>
    <hr>
    <section class="about-electra">
        <div class="container">
            <ul class="row">
                <li class="recuadro">
                    <h2>ELECTRA</h2>
                </li>
                <li class="col-sm-6 ajuste-t fr">
                    <div class="ajuste-m"></div>
                    <div class="ajuste-m">
                        <p>Es una línea inspirada en la gráfica moderna,  el diseño Venezolano del siglo XX, la ciudad de Caracas y las piezas son creadas para satisfacer las necesidades expresivas de la mujer contemporánea en cualquier lugar y momento. <br>La ropa está hecha en función de resaltar los movimientos y la belleza del cuerpo femenino, de esta forma se exalta la valentía que asume la mujer al salir a la calle y ser vista.</p>
                    </div>
                </li>
                <li class="col-sm-6 fl">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about-electra.jpg" alt="electra">
                </li>
            </ul>
        </div>
    </section>
    <hr>
    <section class="about-swim">
        <div class="container">
            <ul class="row">
                <li class="recuadro">
                    <h2>SWIM</h2>
                </li>
                <li class="col-sm-6 ajuste-t">
                   <div class="ajuste-m"></div>
                   <div class="ajuste-m">
                       <p>Traslada las formas anteriores a un nuevo espacio con otro tiempo. Anexando a su repertorio el siempre cambiante clima de los países tropicales y esa necesidad lúdica de exhibirse innata a la mujer caribeña.</p>
                   </div>
                   <div class="ajuste-m"></div>
                </li>
                <li class="col-sm-6">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about-swim.jpg" alt="swim">
                </li>
            </ul>
        </div>
    </section>
<?php get_template_part('includes/subfooter'); ?>
<?php get_template_part('includes/footer'); ?>