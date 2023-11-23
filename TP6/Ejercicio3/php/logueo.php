<?php

    require 'encabezado.php';
    include 'funciones.php';
    //$ubicacion = '../txt/usuarios.txt';

    //controlo que no esten vacíos
    if ( !empty ( $_POST['user'] ) && !empty ( $_POST['pass'] ) && !empty ( $_POST['fecha'] ) && !empty ( $_POST['hora'] ) )
    {
        include 'encabezado.php';
        $user = trim($_POST['user']); 
        $password = trim($_POST['pass']);
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];

        //Datos para guardar y/o encontrar los archivos
        $ubicacion = '../txt/';
        if ( !file_exists($ubicacion) )
        {
            echo '<p>La carpeta no existe<p>';
            mkdir($ubicacion);
        }
        $usuariosFile = 'usuarios.txt';
        $logueoFile = 'log.txt';

        //Manipulo los archivos
        $archivo = fopen($ubicacion.$usuariosFile, 'r');

        while (!feof($archivo))//mientras no sea el final del archivo
        {
            $linea = fgets($archivo);//obtengo linea

            if($linea != '')
            {
                $separado = explode (';', $linea);//separo 1 línea del array
                $separado[0] = trim($separado[0]);
                $separado[1] = trim($separado[1]);

                //Controlo usuario y contraseña
                if ( ($separado[0] == $user) && ($separado[1] == $password))
                {
                    $mensaje = 'valido';
                }
            }
            
        }

        fclose($archivo);

        //redirijo según corresponda
        if ($mensaje == 'valido')
        {
            header('refresh:3; url=listado.php?usuario=' . $user . '&contrasena=' . $password);

            //cargo archivo con los datos de los logueos
            $linea = (implode(';', [$user, $fecha, $hora]));
            $archivoLog = fopen($ubicacion.$logueoFile, 'a');
            
            fputs($archivoLog, $linea . PHP_EOL);
            fclose($archivoLog);

            echo '<h3>Guardado exitoso</h3>';
        }
        else
        {
            header('refresh:3; url = ../index.php');
            //include 'encabezado.php';
            echo '<h3>Datos incorrectos</h3>';
            
        }
        
    }
?>

<?php
    include 'pie.php';
?>