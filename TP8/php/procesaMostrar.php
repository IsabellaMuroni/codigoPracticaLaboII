<?php
    include 'conexion.php';

    $conexion = conectar();
    $estado = 'S';

    if($conexion)
    {
        $consulta = 'SELECT usuario, foto, tipo FROM  usuario WHERE activado = ?';
        //Preparo la consulta
        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 's', $estado);
        //Ejecuto la consulta
        $q = mysqli_stmt_execute($sentencia);
        //Recibo los datos de la DB
        mysqli_stmt_bind_result($sentencia, $userDB, $fotoDB, $tipoDB);

        if($q)
        {
            while(mysqli_stmt_fetch($sentencia))
            {
                echo '<tr>';
                    if($fotoDB == '')
                    {
                        echo '<td><img src = "../img/usuarios/usuario_default.png"></td>';
                    }
                    else
                    {
                        echo '<td><img src = "../img/usuarios/'. $fotoDB . '"></td>';
                    }
                
                    echo '<td>' .$userDB . '</td>';
                    echo '<td>' .$tipoDB . '</td>';
                    echo '<td><i class="bi bi-pencil-square"></i></td>';
                    echo '<td><a href = "usuario_eliminar.php"> <i class="bi bi-trash3-fill"></i></a></td>';
                    echo '<td><i class="bi bi-power"></i></td>';
                echo '</tr>';
            }
        }
        desconectar($conexion);
    }
?>