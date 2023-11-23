<?php

    require 'encabezado.php';

    //controlo que no esten vacíos
    if ( !empty ( $_POST['titulo'] ) && !empty ( $_POST['jugadores'] ) 
        && !empty ( $_POST['lanzamiento'] ) && !empty ( $_POST['genero'] ) 
        && !empty ( $_FILES['portada']['size'] ))
    {
        //Saco extencion de la imagen
        $tipoArchivo = $_FILES['portada']['type'];

        if($tipoArchivo == 'image/png' || $tipoArchivo == 'image/jpg' || $tipoArchivo == 'image/jpeg' || $tipoArchivo == 'image/gif'
            || $tipoArchivo == 'image/SVG')
            {           
                //Manipulo archivo multimedia
                $rutaOrigen = $_FILES['portada']['tmp_name'];
                $nombreNuevo = $_POST['titulo'] . '.jpg';
               
                $ubicacion = '../img';
                if(!file_exists($ubicacion))
                {
                    mkdir($ubicacion);
                }

                $destino = '../img/portadas/';
                if(!file_exists($destino))
                {
                    mkdir($destino);
                }

                $envio = move_uploaded_file($rutaOrigen, $destino.$nombreNuevo);

                if($envio)
                {
                    echo '<h3>Envío exitoso</h3>';
                    //guardo datos en archivo txt
                    $datos =  $_POST;
                    $datos[] = $destino.$nombreNuevo;
                    $linea = implode(';', $datos);

                    $ubicacionTxt = '../txt/';
                    if(!file_exists($ubicacionTxt))
                    {
                        echo '<h3>La carpeta no existe</h3>';
                        mkdir($ubicacionTxt);
                    }

                    
                    $juego = 'juegos.txt';
                    $archivo = fopen($ubicacionTxt.$juego, 'a');
                    fputs($archivo, $linea . PHP_EOL);
                    fclose($archivo);
                }
                else
                {
                    echo '<h3>No se pudo subir el archivo</h3>';
                }

            }
        
        
    }
?>

<?php
    include 'pie.php';
?>