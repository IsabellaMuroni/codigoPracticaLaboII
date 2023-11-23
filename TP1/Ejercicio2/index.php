<?php
    require_once('php/encabezado.php');

    $nombreEmpleado = 'Nombre Completo' ;
    const APORTE_JUBILATORIO = 13 ;
    const OBRA_SOCIAL = 3.5 ;
    $sueldoBasico = mt_rand ( 170000, 290000 ) ;
    $aporteJubAux = ( $sueldoBasico * APORTE_JUBILATORIO ) /100;
    $obraSocAux = ( $sueldoBasico * OBRA_SOCIAL ) /100;
    $sueldoNeto = $sueldoBasico - ( $aporteJubAux + $obraSocAux ) ;

    //Valores con decimales

    $sueldoBasicoDecimal = number_format ( $sueldoBasico, 2, '.', ',' ) ;
    $aporteJubDecimal = number_format ( $aporteJubAux, 2, '.', ',' ) ;
    $obraSocDecimal = number_format ( $obraSocAux, 2, '.', ',' ) ;
    $sueldoNetoDecimal = number_format ( $sueldoNeto, 2, '.', ',' ) ;

?>

<table>
        <caption> <?php echo '<strong>Empleado/a: ' . $nombreEmpleado . '</strong>'; ?> </caption>
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Ingresos</th>
                <th>Descuentos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> Sueldo Básico </td>
                <td> <?php echo '$' . $sueldoBasicoDecimal; ?> </td>
                <td></td>
            </tr>
            <tr>
                <td> Aporte Jubilatorio </td>
                <td></td>
                <td> <?php echo '$' . $aporteJubDecimal; ?> </td>
            </tr>
            <tr>
                <td> Obra Social </td>
                <td></td>
                <td> <?php echo '$' . $obraSocDecimal; ?> </td>
            </tr>
            <tr>
                <td colspan = '3'> <?php echo 'Sueldo Neto: ' . '$' . $sueldoNetoDecimal; ?> </td>
            </tr>
        </tbody>
    </table>

<?php
    require_once('php/pie.php');
?>