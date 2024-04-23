<?php
        $servername = "localhost";
        $database = "telefonos";
        $username = "root";
        $password="";
        
                $conexion = mysqli_connect($servername, $username, $password, $database);
            
                if (!$conexion) {
                    echo "Esto no funciona";
                     die("Fallo conexion: " .mysqli_connect_error());
                }
                return $conexion;
    

?>