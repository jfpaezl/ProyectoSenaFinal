<?php 
    if (!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION['login']?? false; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/build/img/logo.png" type="image/png">
    <link rel="stylesheet" href="/build/css/app.css">
    <title>Proyecto Sena</title>
</head>
<body>
            
    <header class="contenedor-header">
        <div class="barra"> 
            <div class="menu-movil">
                <div class="divlog">
                    <a href="/" ><img class="logo" src="/src/img/logo.png" alt="imagen logo"></a>
                </div>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsibe menu">
                </div>
            </div>          
            
            <div class=" navegacion">
                <a href="/tienda.php" class="boton">Tienda</a>
                <a href="/cotizador.php" class="boton">Cotizador</a>
                <a href="/nosotros.php" class="boton">Sobre Nosotros</a>
            </div>
            <div class="login">
                <?php if ($auth): ?>
                    <a href="/admin">Administrador</a>
                    <a href="/cerrar.php">Cerrar Sesión</a>
                <?php else: ?>
                    <a href="/login.php">Iniciar Sesion</a>
                <?php endif ?>
            </div>
        </div>
    </header>