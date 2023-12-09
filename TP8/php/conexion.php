<?php
    function conectar ()
    {
        $servidor = 'localhost';
        $usuario = 'root';
        $clave = '';
        $baseDatos = 'labo2';

        //Establexco manejador de excepciones
        set_error_handler(function ()
        {
            throw new Exception("Error");
            
        });

        try
        {
            //Intento conectar con la DB
            $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
        } catch (Exception $e)
        {
            //Atrapo el error
            $conexion = false;
            echo '<p>Error, no se pudo conectar con la DB';
        }

        return $conexion;
    }

    function desconectar ($conexion)
    {
        if($conexion)
        {
            mysqli_close($conexion);
        }
        else
        {
            echo '<p>NO se pudo desconectar';
        }
    }

?>