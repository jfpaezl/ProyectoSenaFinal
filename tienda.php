<?php 
    require 'includes/app.php';
    incluirTemplate('header');
    use App\Modelo;
    //implementar un metodo para obtener todas las propiedades
    $modelos = Modelo::all();
?>
    <main class="contenedor">
        <h1>Tienda</h1>
    </main>
    <section class="contenedor tienda">
    <div class="contenedor-anuncio">
        <?php foreach($modelos as $modelo):?>
        <div class="anuncio">
            <picture>
                <img loading="lazy" src="/imagenes/<?php echo $modelo->imagen;?>" alt="Producto">
            </picture>
            <div class="contenido-anuncio">
                <h3><?php echo $modelo->modelo;?></h3>
                <p>$<?php echo $modelo->precio;?></p>
            </div>
            <div class="enlace">
                <a href="cotizador.html" class="boton-verde">Cotizar</a>
            </div>
        </div><!--anuncio-->
        <?php endforeach?>
    </div>
    </section>


<?php 
    incluirTemplate('footer');
?>
