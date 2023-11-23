<?php

    require 'encabezado.php';
    include 'funciones.php';

    //controlo que no esten vacíos
    if ( !empty ( $_POST['plazo'] ) )
    {
        $plazo = $_POST['plazo'];
        $inversiones = mostrarInversion($plazo);

?>

    <section class="container-fluid">
        <main class = "container-sm">
            <h3>Inversiones a <?php echo $plazo; ?> </h3>
            <ol class="list-group list-group-numbered">
            <?php
                foreach ($inversiones as $nombre => $monto)
                {
                    echo '<li class="list-group-item d-flex justify-content-between align-items-start" style="background-color:orange">';
                    echo '<section class="ms-2 me-auto">';
                    echo '<section class="fw-bold">'.$nombre.'</section>';
                    echo '$'. number_format($monto, 2, ',', '.');
                    echo '</section>';
                    echo '<span class="badge bg-primary rounded-pill">'.$plazo.'</span>';
                    echo '</li>';
                }
            ?>
            </ol>
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