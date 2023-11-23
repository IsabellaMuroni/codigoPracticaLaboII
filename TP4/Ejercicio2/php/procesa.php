<?php

    require 'encabezado.php';
    include 'funciones.php';

    //controlo que no esten vacíos
    if ( !empty ( $_POST['monto'] ) && !empty ( $_POST['divisa'] ) )
    {
        //echo '<p>Datos completos</p>';
        $monto = $_POST['monto'];
        $divisa = $_POST['divisa'];
        $montoAdquirido = cotizacionDivisa($divisa, $monto);
    }
    else
    {
        echo '<h3>Faltan datos</h3>';
    }
?>

    <section>
        <main class = "procesa">
            <h2 class = 'divisa'>Divisas</h2>
            <h3 class = 'compra'>Compra</h3>
            <p class = 'montoD'><?php echo 'Monto disponible: $' . number_format($monto, 2, '.', ','); ?></p>
            <p class = 'msj'>
                <?php 
                    switch ($divisa)
                    {
                        case 'USD':
                            echo 'Dólares ';
                            break;
                        case 'BRL':
                            echo 'Reales ';
                            break;
                        case 'EUR':
                            echo 'Euros ';
                            break;
                        case 'CNH':
                            echo 'Yuanes ';
                            break;
                    }

                    echo 'adquiridos: ' . number_format($montoAdquirido, 2, '.', ',');
                ?>
            </p>
        </main>
    </section>

<?php
    require 'pie.php';
?>