<?php

$db = mysqli_connect('localhost', '[usuario de mysql]', '[contraseña]', '[nombre de la base de datos]');

if (!$db) {
    echo 'Conexión denegada';
    exit;
} // else{
//     echo 'Conexión exitosa';
// }

// Las credenciales se hacen en un archivo aparte en caso de cambios solo lo editaremos una vez