<?php

    function cotizacionDivisa ($siglaDivisa, $dinero)
    {
        switch ($siglaDivisa)
        {
            case 'USD':
                $monto = $dinero * 349.65;
                break;
            
           case 'BRL':
                $monto = $dinero * 71.82;
                break;
            case 'EUR':
                $monto = $dinero * 372.96;
                break;
            case 'CNH':
                $monto = $dinero * 349.65;
                break;
        }

        return $monto;
    }

?>