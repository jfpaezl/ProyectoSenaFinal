<?php 
    require '../includes/app.php';
    estaAutenticado();
    incluirTemplate('header');
    use App\Modelo;
    //implementar un metodo para obtener todas las propiedades
    $modelos = Modelo::all();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {        
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id) {
            //eliminar la imagen 
            $query = "SELECT imagen FROM modelos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);
            $modelo = mysqli_fetch_assoc($resultado);
            unlink(CARPETA_IMAGENES.$modelo['imagen']);
            $query = "DELETE FROM modelos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                header('Location: /admin');
            }
        }
    }


?>
    <main class="contenedor">
        <h1>Admin</h1>
        <a class="boton-contacto" href="/admin/modelos/crearModelos.php">Agregar Modelo</a>

        <table class="modelos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="hiden">Modelo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($modelos as $modelo):?>
                <tr>
                    <td><?php echo $modelo->id;?></td>
                    <td class="hiden" ><?php echo $modelo->modelo;?></td>
                    <td><img src="/imagenes/<?php echo $modelo->imagen;?>" alt="imagen" class="imagen-tabla"></td>
                    <td>$<?php echo $modelo->precio;?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $modelo->id ?>">
                            <input type="submit" class="boton-rojo" value="Eliminar">
                        </form>
                        <!-- <a href="#" class="boton-rojo">Eliminar</a> -->
                        <a href="admin/modelos/actualizar.php?id=<?php echo $modelo->id ?>" class ="boton-verde">Actualizar</a>
                    </td>

                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </main>

<?php 
    incluirTemplate('footer');
?>
