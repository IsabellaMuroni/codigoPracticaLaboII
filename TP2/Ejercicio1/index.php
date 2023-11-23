<?php

    require_once('php/header.php');
?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-md">
            <a class="navbar-brand" href="#">Sistema Facturación</a>
        </div>
    </nav>

    <section class = "container-fluid">

        <section class = "row">

            <aside class = "col-md-3 lateral">

                <h3>Este es un aside</h3>

                <?php
                    $codigoLetra = mt_rand(ord('A'), ord('C'));
                    $letra = chr($codigoLetra);

                    echo '<strong>Nivel: ' . $letra . '</strong>';
                    if ($letra == 'A')
                    {
                        require('php/menuA.php');
                    }
                    elseif($letra == 'B')
                    {
                        require('php/menuB.php');
                    }
                    else
                    {
                        require('php/menuC.php');
                    }
                ?>

            </aside>

            <main class = "col-md-9 principal">

                <h2>Contenido principals</h2>
                
            </main>

        </section>
        
    </section>
    
<?php
       require_once('php/pie.php');
?>