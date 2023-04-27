<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>
    <main class="contenedor">
        <h1>Nosotros</h1>
    </main>
    <section class="testimonio contenedor">
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
