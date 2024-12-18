<?php

function obtener_servicios() {
    try {
        // Importar las credenciales
        require 'database.php';
        // Consulta SQL
        $sql = "SELECT * FROM servicios;"; // asi es como se accede a la info de las tablas en mysql
        // Realizar la consulta a la base de datos
        $consulta = mysqli_query($db, $sql); // Las credenciales y la consulta
        return $consulta; // retorna ek resultado
    } catch (\Throwable $th) {
        var_dump($th); // en caso de fallar imprimirá el error
    }
}

obtener_servicios();


// Cerrar la conexión (opcional) esto es dentro de try()

//$cerrarConexion = mysqli_close($db);
//echo $cerrarConexion; // el resultado es 1 lo que quiere decir que si se termino la conexión con el servidor

// ¿Por que cerrar la conexión?
// Sirve para liberar memoria, pero es opcional ya que al finalizar el archivo php detecta que hay conexión abierta este la cierra