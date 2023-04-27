<?php 
    require 'includes/app.php';
    $db = conectarDB();
    //Autenticar el usuario

    $errores = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (!$email){
            $errores[] = "El Correo es obligatorios";
        }
        if (!$password){
            $errores[] = "La contraseña es obligatorio";
        }

        if (empty($errores)){
            //revisar si el usuario existe
            $query = " SELECT * FROM usuarioadmin WHERE email = '${email}' ";
           
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows){
                //revisar si el password es correocto
                $usuario = mysqli_fetch_assoc($resultado);
                //verificar si el password es correcto
                $auth = password_verify($password, $usuario['password']);

                if ($auth){
                    //el usuario esta autenticado
                    session_start();
                    $_SESSION['login']= true;

                    header('Location: /admin');
                }else {
                    $errores[] = "La contraseña no es correcta";
                }
            }else{
                $errores[] = "El usuario no existe";
            }

        }

    }

    // incluye el header
    
    incluirTemplate('header');
?>
    <main class="contenedor contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach ?>
        
        <form method="POST" class="formulario">
            <fieldset>
                <legend>Correo y contraseña</legend>

                <label for="email">Correo</label>
                <input type="email" name="email" placeholder="Tu correo" id="email" require>

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu correo" id="password" require>

            </fieldset>

            <input type="submit" value="iniciar Sesion" class="boton boton-verde">
        </form>
        
    </main>

<?php 
    incluirTemplate('footer');

    