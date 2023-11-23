<?php
    include 'php/encabezado.php';

    $ubicacion = 'txt/';
    $horasFile = 'horas.txt';
    const PRECIO_HORA = 4000;
    date_default_timezone_set('America/Argentina/Tucuman');
?>
<section class = "container">
    <main class = "row">
        <h2 class="display-2 text-center">Detalle Facturación</h2>
        <ul class="list-group list-group">

            <?php
                //Manipulo archivps
                $archivo = fopen($ubicacion.$horasFile, 'r');

                while(!feof($archivo))
                    {
                        $linea = fgets($archivo);//obtengo la linea

                        if($linea != '')
                        {
                            $separado = explode(';', $linea);

                            //doy formato a las fechas y calculo horas enteras
                            $fecha = date_create($separado[2]);
                            $fecha = date_format($fecha, 'd/m/Y');
                            $dif = strtotime($separado[3]) - strtotime($separado[2]);
                            $horasEnteras = round($dif/3600, 0);

                            //Calculo y almaceno el total precioHora * cantHoras
                            $total = (PRECIO_HORA * $horasEnteras);
                            $totalPagar[] = $total;

                            echo '<li class="list-group-item d-flex justify-content-between align-items-start list-group-item-info">';
                            echo '<section class="ms-2 me-auto">';
                            echo '<div class="fw-bold">' . $separado[0] . ' - ' . $fecha . '</div>';
                            echo  '$' . number_format(($total), 2, ',', '.');
                            echo '</section>';
                            echo '<span class="badge bg-primary rounded-pill">' . $horasEnteras . ' hs</span>';
                            echo '</li>';
                        }
                    }

                    fclose($archivo);
                    $totalPagar = array_sum($totalPagar);
            ?>
           
        </ul>
        <section>
            <article class="border border-danger border-3 rounded mt-1 text-center" >
                <?php
                    echo '<p class="fw-bold">Total:</p class="fw-bold">';
                    echo '<p>$ '. number_format($totalPagar,2,",",".") .'</p>';
                ?>
            </article>
            
        </section>

    </main>
</section>

<?php
    include 'php/pie.php';

?>