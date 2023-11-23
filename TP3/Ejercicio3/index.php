<?php
    require_once 'php/encabezado.php';

    $tarifa = array('moto' => 70, 'auto' => 120, 'camioneta' => 190, 'pesado' => 250);
    $vehiculos = array('moto', 'auto', 'camioneta', 'pesado');
    $cantMoto = 0;
    $cantAuto = 0;
    $cantCamioneta = 0;
    $cantPesado = 0;
    

    for ($i = 0; $i < 2500; $i++)
    {
        $clave = array_rand($vehiculos);

        switch ($clave)
        {
            case 0:
                $cantMoto++;
                break;

            case 1:
                $cantAuto++;
                break;
            case 2:
                $cantCamioneta++;
                break;
            case 3:
                $cantPesado++;
        }
    }

    //Calculo totales

    $sumaCant = $cantMoto + $cantAuto + $cantPesado + $cantCamioneta;
    $total = array($cantMoto.$tarifa['moto'], $cantAuto.$tarifa['auto'], $cantCamioneta.$tarifa['camioneta'], $cantPesado.$tarifa['pesado']);
?>

    <section class="container">
        <h1>Peaje - Informe de recaudación</h1>
        <table class = "table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <td>Tipo</td>
                    <td>Cantidad</td>
                    <td>Recaudado</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-info">Moto</td>
                    <td><?php echo $cantMoto ?></td>
                    <td><?php echo number_format($total[0], 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td class="table-info">Auto</td>
                    <td><?php echo $cantMoto ?></td>
                    <td><?php echo  number_format($total[1], 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td class="table-info">Camioneta</td>
                    <td><?php echo $cantCamioneta ?></td>
                    <td><?php echo  number_format($total[2], 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td class="table-info">Pesados</td>
                    <td><?php echo $cantPesado ?></td>
                    <td><?php echo  number_format($total[3], 0, ',', '.') ?></td>
                </tr>
                <tr class="table-danger">
                    <td>Totales</td>
                    <td><?php echo $sumaCant ?></td>
                    <td><?php echo number_format(array_sum($total), 0, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    </section>
    
<?php
    require_once 'php/pie.php';

?>