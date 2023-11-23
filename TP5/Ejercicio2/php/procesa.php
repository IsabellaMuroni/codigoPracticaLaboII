<?php

    require 'encabezado.php';
    include 'funciones.php';
    
    //controlo que no esten vacíos
    if ( !empty ( $_POST['nombre'] ) && !empty ( $_POST['deposito'] ) && !empty ( $_POST['plazo']) )
    {
        $nombre = trim($_POST['nombre']);
        $deposito = trim($_POST['deposito']);
        $plazo = trim($_POST['plazo']);
        $intereses = calcularIntereses($deposito, $plazo);

        //Manipulo los archivos de texto
        $carpeta = '../txt/';
        $nombreArchivo = 'inversiones.txt';
        $linea = implode(';', $_POST);

        if (!file_exists($carpeta))//Controlo la existencia de la carpeta
        {
            echo 'No existe la carpeta';
            mkdir($carpeta);
        }

        $archivo = fopen($carpeta.$nombreArchivo, 'a');
        fputs($archivo, $linea . PHP_EOL);
        fclose($archivo);
        echo '<p>Se guradó correctamente</p>';


?>

    <section class="container-fluid">
        <main class = "container-sm">
            <p><strong>Nombre: </strong><?php echo $nombre; ?></p>
            <p><strong>Depósito inicial: $</strong><?php echo number_format ( $deposito, 2, ',', '.' ); ?></p>
            <p><strong>Plazo: </strong><?php echo $plazo . ' días'; ?></p>
            <p><strong>Intereses Obtenidos: $</strong><?php echo number_format ( $intereses, 2, ',', '.' ); ?></p>
        </main>
    </section>
<?php
    }
    else
    {
        echo '<h3>Faltan datos</h3>';
    }
?>



<?php
    require 'pie.php';
?>