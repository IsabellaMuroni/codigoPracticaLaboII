<?php
    //include 'encabezado.php';

    if(!empty($_POST['usuario']) && !empty($_POST['pass']) && !empty($_POST['tipo']) && !empty($_FILES['foto']['size']))
    {
        //Llamo a los archivos que necesito
        include 'conexion.php';
        include 'encabezado.php';

        //Me conecto con la DB
        $conexion = conectar();

        if($conexion)
        {
            $user = $_POST['usuario'];
            $password = sha1($_POST['pass']);
            $typeUser = $_POST['tipo']; 
            $tipoArchivo = $_FILES['foto']['type'];
    
            if ($tipoArchivo == 'image/png' || $tipoArchivo == 'image/jpg' || $tipoArchivo == 'image/jpeg' || $tipoArchivo == 'image/gif'
            || $tipoArchivo == 'image/SVG')
            {
                $nombre = $_FILES['foto']['name'];
                //separo el nombre de la extención
                $extencion = explode('.', $nombre);
                $rutaOrigen = $_FILES['foto']['tmp_name'];
                //Renombro la foto
                $photoName = $_POST['usuario'] . '.' . $extencion[1];
                $destino = '../img/usuarios/' . $photoName;
                $envio = move_uploaded_file($rutaOrigen, $destino);
    
                if($envio)
                {
                    echo '<h3>Envio exitoso</h3>';
                }
    
            }

            //Realizo la consulta
            $consulta = 'INSERT INTO usuario (usuario, pass, tipo, foto) VALUES (?, ?, ?, ?)';
            //Preparo la consulta
            $sentencia = mysqli_prepare($conexion, $consulta);
            mysqli_stmt_bind_param($sentencia, 'ssss', $user, $password, $typeUser, $photoName);
            //Ejecuto la sentencia
            $q = mysqli_stmt_execute($sentencia);
            if($q)
            {
                echo '<h3>Guardado exitoso</h3>';
            }
            else
            {
                echo '<h3>Error al guardar</h3>';
            }
            desconectar($conexion);
        }
        else
        {
            echo '<h3> No se pudo conectar con la DB</h3>';
        }

    }
    else
    {
        echo '<h2>Faltan datos</h2>';
    }
    include 'pie.php';
?>