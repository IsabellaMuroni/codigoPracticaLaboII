<?php
    require_once('php/encabezado.php');

    $numerosCarton = array(2, 3, 5,6,7, 8, 10, 11, 14, 15, 16, 17, 19, 20, 24) ;
    $bolillas = array();//Creo un array vacío
    $longitud = count ($numerosCarton);
    $aciertos = 0;

    //Array con bollilas
    for ($i = 0; $i < $longitud; $i ++)
    {
        do
        {
            $num = mt_rand(1, 25);
        }
        while (in_array($num, $bolillas));

        $bolillas[$i] = $num;
    }

    //Ordeno el arreglo
    sort($bolillas);

    for ($i = 0; $i < $longitud ; $i++)
    { 
        if (in_array($bolillas[$i], $numerosCarton)) 
        {
            $aciertos++;
        }
    }
?>  

    <section class="container">
        <main>
            <h1>Telekino</h1>
            <table>
                <?php
            
                    for ($i=0; $i < 5; $i++) 
                    {
                        echo '<tr>';
                    
                        for ($j=0; $j < 3; $j++) 
                        { 
                            $tabla = $i * 3 + $j; 
                            echo '<td>'.$numerosCarton[$tabla].'</td>';
                        }
                        echo '</tr>';
                    }
                ?>
            </table>

            <?php

                echo '<hr>';
                echo '<p> Números sorteados: ';
                    for ($a = 0; $a < $longitud; $a++)
                    {
                        echo $bolillas[$a] . ' - ';
                    }
                echo '</p>';
                echo '<p><strong>Cantidad de aciertos: </strong>' . $aciertos . '</p>';
                if ($aciertos == 15)
                {
                    echo 'Ganador del pozo de $150.000.000';
                }
            ?>
        </main>
    </section>

<?php
    require_once('php/pie.php');
?>
