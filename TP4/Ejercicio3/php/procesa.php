<?php

    require 'encabezado.php';
    include 'funciones.php';

    //controlo que no esten vacíos
    if ( !empty ( $_POST['deposito'] ) && !empty ( $_POST['plazo'] ) )
    {
        //echo '<p>Datos completos</p>';
        //var_dump($_POST);
        $deposito = $_POST['deposito'];
        $plazo = $_POST['plazo'];
        $intereses = calcularIntereses($deposito, $plazo);

?>

    <section class="container-fluid">
        <main class = "container-sm">
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