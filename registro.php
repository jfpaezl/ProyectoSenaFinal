<?php 

require 'includes/app.php';
$db = conectarDB();

//crear usuario 

$email = "correo@correo.com";
$pastword = "123456";
$nombre = "juan";
$apellido = "perez";

// hashear el pasword

$pastwordHash = password_hash($pastword, PASSWORD_BCRYPT);

//query 
$query = " INSERT INTO usuarioadmin (nombre, apellido, password, email ) VALUES ('${nombre}', '${apellido}', '${pastwordHash}', '${email}');";

exit;
mysqli_query($db, $query);