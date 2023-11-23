<?php

    require 'encabezado.php';
    include 'funciones.php';

    //controlo que no esten vacíos
    if ( !empty ( $_POST['email'] ) && !empty ( $_POST['pass'] ) )
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
    }
    else
    {
        echo '<h3>Faltan datos</h3>';
    }
?>

    <section>
        <main class = "procesa">
            <p>Email: <?php echo $email; ?></p>
            <p>Password: <?php echo $password; ?></p>
        </main>
    </section>

<?php
    require 'pie.php';
?>