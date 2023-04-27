<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'Onepiece1', 'proyectosena');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}