<?php
use App\Modelo;


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', __DIR__ . '/../imagenes/');

function incluirTemplate($nombre){
    include TEMPLATES_URL."/${nombre}.php";
}
function estaAutenticado() {
    session_start();

    if(!$_SESSION['login']) {
        header('Location: /');
    }
}

function debuguear($variable, $isExit=false){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    if ($isExit) {
        exit;
    }
}
//Escapa el HTML

function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

