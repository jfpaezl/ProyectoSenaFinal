<?php
require '../../includes/app.php';
estaAutenticado();
incluirTemplate('header');
$id = $_GET['id'];
use App\Modelo;
$objetoModelo = Modelo::find($id);

//debuguear($objetoModelo, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //asignar los atributos 
    $args = $_POST['modelo'];

    $objetoModelo->sincronizar($args);

    //debuguear($objetoModelo, true);
    $errores = $objetoModelo->validar();

    $imagenInput = $_FILES['imagen'];
    if ($imagenInput['tmp_name']){
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
    
    }
   
        //crear el query

    if (empty($errores)) {
        
        //dirigir a carpeta
        move_uploaded_file($imagenInput['tmp_name'], $carpetaImagenes . $nombreImagen);
        $resultado = $objetoModelo->guardar();
        header('Location: /admin?resultado=1');

    }

}

?>
<main class="contenedor">
    <h1>Actualizar Modelo</h1>
    <a class="boton-contacto" href="/admin">volver</a>

    <?php foreach ($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <section class="contenedor-formulario">
        <form class="formulario" method="POST" action="/admin/modelos/actualizar.php?id=<?php echo $id?>" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_modelos.php';?>
            <div class="select">    
                <input type="submit" value="ACTUALIZAR" class="boton-contacto">
                <!-- <a href="#" class="boton-contacto ">GUARDAR</a> -->
            </div>
        </form>

    </section>

</main>

<?php
incluirTemplate('footer');
?>