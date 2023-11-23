<?php

    function calcularIntereses ($depositoInicial, $plazo)
    {
        switch ($plazo) {
            case 30:
                $tasa = 122;
                break;
            case 45:
                $tasa = 130;
                break;
            case 60:
                $tasa = 142;
                break;
            case 90:
                $tasa = 155;
                break;
        }

        $interes = $depositoInicial * ( ( ($tasa / 100) * $plazo ) / 365);

        return $interes;
    }

?>