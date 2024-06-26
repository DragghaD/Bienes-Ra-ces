<?php

require 'includes/funciones.php'; 

    
    incluirtemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce más de Nosotros</h1>
        <div class="contenido-nosotros"> 
            <div class="imagen"> 
                <picture> 
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpeg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    15 Años de experiencia
                </blockquote>
                <p>Esta empresa de bienes raíces, con 15 años de trayectoria, ha establecido un sólido legado en el mercado inmobiliario. Durante su extensa historia, ha demostrado un compromiso inquebrantable con la excelencia en el servicio al cliente y una profunda comprensión de las tendencias del mercado. Su vasta experiencia y reputación consolidada la convierten en un referente confiable para aquellos que buscan comprar, vender o invertir en propiedades. A lo largo de estos años, ha contribuido significativamente al éxito de innumerables transacciones inmobiliarias, brindando a sus clientes la confianza y la seguridad que solo la experiencia puede ofrecer.</p>
                <p>Con 15 años de experiencia, esta empresa de bienes raíces es una destacada firma en el mercado, con un historial comprobado de satisfacer las necesidades de sus clientes y adaptarse a las tendencias cambiantes. Su experiencia sólida la convierte en un referente de confianza en el sector inmobiliario.</p>
            </div>
        </div>
     </main>
     <section class="contenedor seccion">
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
     </section>
     <?php
   
   incluirtemplate('footer');
   ?>