<?php

    require_once('php/header.php');

    $num = mt_rand(100,100000);
	$num_Aux = $num;
	$digitos = 0;
	$impares = 0;
    $pares = 0;
	$ultimoDigito = 0;

	while ($num_Aux > 0)
    {
		$digitos++;
		$ultimoDigito = ($num_Aux % 10);

		if ( ( $ultimoDigito % 2 ) != 0 )
        {
			$impares++;
		}
        if ( ($ultimoDigito % 2) == 0 )
        {
            $pares++;
        }

		$num_Aux = intdiv($num_Aux, 10);
		
	}

	
?>
    <section class="container">
        <main>
            <?php
                echo "Número = " . $num . "<br>";
                echo "Cantidad de dígitos  = " . $digitos . "<br>";
                echo "Cantidad de dígitos pares = " . $pares . "<br>";
                echo "Cantidad de dígitos impares = " . $impares . "<br>";
            ?>
        </main>
    </section>
    
<?php
       require_once('php/pie.php');
?>