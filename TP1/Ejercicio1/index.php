<?php

    require_once('php/encabezado.php');

    $nombreProducto = 'mate cocido';
    $precioProducto = mt_rand ( 10000, 50000 );
    $precioProductoDecimal = number_format ($precioProducto, 2, '.', ',');
    const IVA = 21;//or define('IVA', 21);
    $precioProdIVA = ( $precioProducto * IVA ) / 100;
    $precioProdIvaDecimal = number_format ($precioProdIVA, 2, '.', ',');
    $total = number_format ( $precioProducto + $precioProdIVA, 2, ',', '.' );

?>

    <table>
        <caption> <h2>Ticket Factura "A"</h2></caption>
        <thead>
            <tr>
                <th>Detalle</th>
                <th>IMPORTE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $nombreProducto; ?> </td>
                <td> <?php echo $precioProductoDecimal; ?> </td>
            </tr>
            <tr>
                <td> Total sin IVA </td>
                <td> <?php echo $precioProductoDecimal; ?> </td>
            </tr>
            <tr>
                <td> IVA 21,00% </td>
                <td> <?php echo $precioProdIvaDecimal; ?> </td>
            </tr>
            <tr>
                <td> TOTAL </td>
                <td> <?php echo $total; ?> </td>
            </tr>
        </tbody>
    </table>

<?php
       require_once('php/pie.php');
?>