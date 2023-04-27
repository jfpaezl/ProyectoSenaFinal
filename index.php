<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>
    <main>
        <section class="portada">
            <div class="portada-texto">
                <h1>Delantales personalizados</h1>
                <p>purus, nec ornare magna. Quisque feugiat posuere ex, et suscipit ligula feugiat ut. Curabitur commodo, elit vel accumsan luctus, dui risus efficitur metus, vitae posuere felis ligula posuere felis.</p>   
                <a href="">contactanos</a>
            </div>
        </section>
    </main>
    <section class="contenedor seccion">
        <h2>Nuestros modelos</h2>
        <div class="contenedor-anuncio">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/del4.webp" type="image/webp">
                    <source srcset="build/img/del4.png" type="image/png">
                    <img loading="lazy" src="build/img/del4.png" alt="Producto">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Delantal en Tela</h3>
                    <p>purus, nec ornare magna. Quisque feugiat posuere ex, et suscipit ligula feugiat ut. Curabitur commodo</p>
                </div>
                <div class="enlace">
                    <a href="cotizador.html" class="boton-verde">Cotizar</a>
                </div>
            </div><!--anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/del8.webp" type="image/webp">
                    <source srcset="build/img/img/del8.png" type="image/png">
                    <img loading="lazy" src="build/img/img/del8.png" alt="Producto">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Delantal en Cuero</h3>
                    <p>purus, nec ornare magna. Quisque feugiat posuere ex, et suscipit ligula feugiat ut. Curabitur commodo</p>
                </div>
                <div class="enlace">
                    <a href="cotizador.html" class="boton-verde">Cotizar</a>
                </div>
            </div><!--anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/del12.webp" type="image/webp">
                    <source srcset="build/img/del12.png" type="image/png">
                    <img loading="lazy" src="build/img/del12.png" alt="Producto">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Delantal en Cuerina</h3>
                    <p>purus, nec ornare magna. Quisque feugiat posuere ex, et suscipit ligula feugiat ut. Curabitur commodo</p>
                </div>
                <div class="enlace">
                    <a href="cotizador.html" class="boton-verde">Cotizar</a>
                </div>
            </div><!--anuncio-->
        </div><!--Contenedor-anuncio-->

    </section>
    <section class="imagen-contacto">
        <h2>El Delantal De Tus Sueños</h2>
        <p>Te ayudamos a hacer tu diseño desde 0 a tu gusto para que tu negocio se distinga</p>
        <a href="#" class="boton-contacto">Contactanos</a>
    </section>
    <section class="testimonio contenedor">
        <h2>Comentarios</h2>
        <div class="contenerdor-testimonios">
            <picture class="imagen-testiminio">
                <source srcset="build/img/Jaime castañeda.webp" type="image/webp">
                <source srcset="build/img/Jaime castañeda.png" type="image/png">
                <img src="build/img/Jaime castañeda.webp" alt="testimonio de Jaime Catañeda">
            </picture>
            <div class="texto-testimonio">
                <h3>Jaime Catañeda</h3>
                <p>In hac habitasse platea dictumst. Aliquam erat volutpat. Nulla vel tincidunt urna, id vehicula ligula. Curabitur interdum, tortor semper rhoncus iaculis, arcu risus tincidunt urna, sit amet posuere tellus arcu non lectus. Praesent non mauris quis orci vehicula ultrices. Mauris consectetur, justo a consequat faucibus, odio urna congue nulla, in feugiat purus nulla id lacus. Mauris non blandit lectus.</p>
            </div>
        </div>  
    </section>
<?php 
    incluirTemplate('footer');
?>
