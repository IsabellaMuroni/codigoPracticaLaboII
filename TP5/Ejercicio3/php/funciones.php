<?php

    function mostrarInversion ($plazo)
    {
        //Array para guardar datos
        $inversiones = [];
        //Manipulo archivos
        $ubicacion = '../txt/';
        $nombreArchivo = "inversiones.txt";
        $archivo = fopen ($ubicacion.$nombreArchivo, 'r');

        while(!feof($archivo))
        {
            $linea = fgets($archivo);

            if ($linea != '')
            {
                $linea = trim($linea);
                $datos = explode(';', $linea);

                if($datos[2] == $plazo)
                {
                    $inversiones[$datos[0]] = $datos[1];
                }
            }
        }

        fclose($archivo);

        return $inversiones;
    }

?>