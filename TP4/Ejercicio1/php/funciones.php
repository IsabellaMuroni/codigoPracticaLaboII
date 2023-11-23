<?php

 
    

    function calcularSueldoNeto ( $porcentajeAumento, $aporteJub, $obraSocial)
    {
        $sueldoBruto = 250000;

        $sueldoBrutoAumento = $sueldoBruto + ($sueldoBruto * $porcentajeAumento ) / 100;
        $descAportJub = ( $sueldoBrutoAumento * $aporteJub ) / 100 ;
        $descObraSoc = ( $sueldoBrutoAumento * $obraSocial ) / 100 ;
       
        $sueldoNeto = $sueldoBrutoAumento - ( $descAportJub + $descObraSoc ) ;
        
        return $sueldoNeto;
    }
?>