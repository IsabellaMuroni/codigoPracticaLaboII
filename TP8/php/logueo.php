<?php
    $ruta = '..';
    include 'encabezado.php';

    if (!empty($_POST['user']) && !empty($_POST['pass'])) 
    {
        include 'conexion.php';
        $conexion = conectar();

        if($conexion)
        {
            $user = $_POST['user'];
            $password = sha1($_POST['pass']);

            $consulta = 'SELECT usuario, pass, activado, foto, tipo FROM  usuario WHERE usuario = ? AND pass = ?';
            //Preparo la consulta
            $sentencia = mysqli_prepare($conexion, $consulta);
            mysqli_stmt_bind_param($sentencia, 'ss', $user, $password);
            //Ejecuto la consulta
            $q = mysqli_stmt_execute($sentencia);
            //Recibo los datos de la DB
            mysqli_stmt_bind_result($sentencia, $userDB, $passwordDB, $estado, $foto, $tipo);

            if($q)
            {
                mysqli_stmt_fetch($sentencia);

                if (($user == $userDB) && ($password == $passwordDB) && ($estado == 'S'))
                {
                    header("refresh:2;url=usuario_listado.php");

                    echo '<section class = "container">';
                    echo '<main class = "row">';
                    echo '<p>Usuario y contraseña correctos: User: ' . $userDB . '</p>';
                    echo '</main>';
                    echo '</section>';
                }
                else
                {
                    header("refresh:2;url=../index.php");

                    echo '<section class = "container">';
                    echo '<main class = "row">';
                    echo '<h3>Usuario y/o contraseña Incorrectos </h3>';
                    echo '</main>';
                    echo '</section>';
                }
            }

            desconectar($conexion);
        }
 
    }

    include 'pie.php';
?>