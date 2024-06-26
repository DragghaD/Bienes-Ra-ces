<?php


require 'includes/funciones.php'; 

    
    incluirtemplate('header',$inicio=true);
?>

    <main class="contenedor seccion">
        <h1>Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>En Bienes Raices, tu seguridad es nuestra prioridad. Todas las transacciones y datos personales están protegidos para tu tranquilidad.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precios</h3>
                <p>Precios competitivos son nuestra especialidad. Ofrecemos casas y departamentos asequibles para satisfacer tu presupuesto y tus necesidades.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>La agilidad en la adquisición es nuestra ventaja. Encuentra tu casa o departamento de ensueño de manera rápida y sencilla.</p>
            </div>
        </div>
     </main>
     <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>
        <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source src="build/img/anuncio1.webp" type="image/webp">
                <source src="build/img/anuncio1.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio"> 
                <h3>Casa terminados de Lujo a lado del Lago</h3>
                <p>
                  Con excelentes vistas y acabados de maxima calidad
                </p>
                <p class="precio">5.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="iconos-precio"  loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="iconos-precio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="iconos-precio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
            </div><!--.contenido-anunucio-->
        </div> <!--anuncio-->
        <div class="anuncio">
            <picture>
                <source src="build/img/anuncio2.webp" type="image/webp">
                <source src="build/img/anuncio2.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio"> 
                <h3>Casa con terminado de Lujo</h3>
                <p>
                  Con detalles impecables para una vida sofisticada.
                </p>
                <p class="precio">12.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="iconos-precio"  loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="iconos-precio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="iconos-precio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
            </div><!--.contenido-anunucio-->
        </div> <!--anuncio-->
        <div class="anuncio">
            <picture>
                <source src="build/img/anuncio3.webp" type="image/webp">
                <source src="build/img/anuncio3.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio"> 
                <h3>Casa de lujo con piscina privada</h3>
                <p>
                 Disfruta del lujo y la frescura en tu propio paraíso privado.
                </p>
                <p class="precio">9.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="iconos-precio" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="iconos-precio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="iconos-precio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
            </div><!--.contenido-anunucio-->
        </div> <!--anuncio-->
        </div> <!--contenedor-anuncios-->
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver todas</a>
        </div>
     </section>

     <section class="imagen-contacto" > 
        <h2>Encuentra la casa de tus sueños</h2>
        <p>
            Llena el formulario de contacto y un asesor se pondrá en contacto con usted lo mas pronto posible
        </p>
        <a href="contacto.html" class="block-amarillo">Contáctennos</a>
     </section>

     <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El equipo demostró un comportamiento excepcional, brindando una atención sobresaliente, y la casa que me presentaron superó todas mis expectativas.
                </blockquote>
                <p>- Hernan Lopez</p>
            </div>
        </section>
     </div>

     <?php
   
   incluirtemplate('footer');
   ?>