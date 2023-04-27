<?php
require '../../includes/app.php';
estaAutenticado();
incluirTemplate('header');
use App\Modelo;

$objetoModelo = new Modelo;



$objetoModelo = '';
$precio = '';
$descripcion = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $objetoModelo = new Modelo($_POST['modelo']);
    $errores = $objetoModelo->validar();

    $imagenInput = $_FILES['imagen'];
    

    if (!$imagenInput['name'] || $imagenInput['error']) {
        $errores[] = 'La Imagen es Obligatoria';
    }

    //Validar por tamaño (1mb máximo)
    $medida = 1000 * 1000;


    if ($imagenInput['size'] > $medida) {
        $errores[] = 'La Imagen es muy pesada';
    }
    //subida de archivos
    $carpetaImagenes = '../../imagenes/';
    if (!is_dir($carpetaImagenes)) {
        mkdir($carpetaImagenes);
    }
    //setear la imagen
    //generar un nombre unico
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

    $objetoModelo->setImagen($nombreImagen);
    $objetoModelo->imagen = $nombreImagen;
        //crear el query

    if (empty($errores)) {
        
        //dirigir a carpeta
        move_uploaded_file($imagenInput['tmp_name'], $carpetaImagenes . $nombreImagen);
        $objetoModelo->crear();
        header('Location: /admin?resultado=1');

    }

}

?>
<main class="contenedor">
    <h1>Nuevo Modelo</h1>
    <a class="boton-contacto" href="/admin">volver</a>

    <?php foreach ($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <section class="contenedor-formulario">
        <form class="formulario" method="POST" action="/admin/modelos/crearModelos.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_modelos.php';?>
            <div class="select">    
                <input type="submit" value="GUARDAR MODELO" class="boton-contacto">
                <!-- <a href="#" class="boton-contacto ">GUARDAR</a> -->
            </div>
        </form>

    </section>

</main>

<?php
incluirTemplate('footer');
?>