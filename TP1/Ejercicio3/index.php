<?php
    require_once('php/encabezado.php');

    const IMPUESTO_PAIS = 30;
    const IMPUESTO_GANANCIAS = 45;
    $cantDolar = mt_rand ( 100, 200 ) ;
    const COTIZACION = 365.50;
    $dolarCompradoAux = $cantDolar * COTIZACION;

    //Calculo los impuestos
    $impGananciasAux = ( $dolarCompradoAux * IMPUESTO_GANANCIAS ) / 100 ;
    $impPaisAux = ( $dolarCompradoAux * IMPUESTO_PAIS ) / 100 ;

    //Decimales
    $dolarComprado = number_format($dolarCompradoAux, 2, '.', ',');
    $cotizacion = number_format (COTIZACION, 2, '.', ',');
    $impGanancias = number_format ($impGananciasAux, 2, '.', ',');
    $impPais = number_format ($impPaisAux, 2, '.', ',');
    $totalAux = $impGananciasAux + $impPaisAux + $cotizacion;
    $total = number_format ( $totalAux, 2, '.', ',' ) ;
?>

    <section>
        <h2>Compra dólares</h2>
        <h3> <?php echo 'Cotización: $' . $cotizacion; ?> </h3>
       <br>
       <br>
        <p> <?php echo 'Está comprando: u$s' . $cantDolar; ?> </p>
        <p> <?php echo 'Precio sin impuestos: $' . $dolarComprado; ?> </p>
        <p> <?php echo 'Impuesto PAIS: $' . $impPais; ?> </p>
        <p> <?php echo 'Impuesto a las Ganancias: $' . $impGanancias; ?> </p>
        <p> <?php echo 'Total a pagar: $' . $total; ?> </p>
    </section>
<?php
    require_once('php/pie.php');
?>