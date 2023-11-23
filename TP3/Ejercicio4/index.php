<?php

    require_once 'php/encabezado.php';
    //include 'php/piezas.php';

    $piezasDisponibles = 
    [   
        'rey_b','rey_n','reina_b','reina_n','torre_b','torre_b','torre_n',
        'caballo_b','caballo_n','alfil_b','alfil_n','alfil_n','peon_b',
        'peon_b','peon_b','peon_b','peon_b','peon_n','peon_n','peon_n',
        'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
        'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
        'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
        'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
        'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
        'vacio','vacio','vacio','vacio'
    ];
    
    $clave = array_rand($piezasDisponibles);
    echo '<p>' . $piezasDisponibles[$clave] . '</p>';
    unset($piezasDisponibles[$clave]);
    $clave = array_rand($piezasDisponibles);
    echo '<p>' . $piezasDisponibles[$clave] . '</p>';
    unset($piezasDisponibles[$clave]);
    print_r($piezasDisponibles);
    echo '<p>' . count($piezasDisponibles) . '</p>';
    
    
?>

    <section class = 'container'>
        <main>
            <table border = '1'>
                <?php
                    for ($i = 0; $i < 8; $i++) { 
                        echo '<tr>';

                        for ($j = 0; $j < 8; $j++) { 
                            //echo '<td>'; 
                            if ( ($i + $j) % 2 == 0) {
                                echo '<td class = "white">';
                                echo'</td>';
                            }
                            else{
                                echo '<td class = "black">';
                                //echo 'hols';
                                echo'</td>';
                            }
                            //echo'</td>';
                        }

                        echo '</tr>';
                    }
                ?>
            </table>

        </main>

    </section>

    

<?php
    require_once 'php/pie.php';
?>