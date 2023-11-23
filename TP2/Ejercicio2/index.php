<?php

    require_once('php/header.php');

    $dia = mt_rand ( 1, 31 ) ;
	$mes = mt_rand ( 1, 1 ) ;

    
	if (($dia >= 21 && $mes == 3) || ($dia <= 20 && $mes == 4)) {
        $signo = "Aries";
	}
	if (($dia >= 21 && $mes == 4) || ($dia <= 21 && $mes == 5)) {
		$signo = "Tauro";
	}
	if (($dia >= 22 && $mes == 5) || ($dia <= 21 && $mes == 6)) {
		$signo = "Géminis";
	}
	if (($dia >= 22 && $mes == 6) || ($dia <= 22 && $mes == 7)) {
		$signo = "Cáncer";
	}
	if (($dia >= 23 && $mes == 7) || ($dia <= 22 && $mes == 8)) {
		$signo = "Leo";
	}
	if (($dia >= 23 && $mes == 8) || ($dia <= 22 && $mes == 9)) {
		$signo = "Virgo";
	}
	if (($dia >= 23 && $mes == 9) || ($dia <= 22 && $mes == 10)) {
		$signo = "Libra";
	}
	if (($dia >= 23 && $mes == 10) || ($dia <= 21 && $mes == 11)) {
		$signo = "Escorpio";
	}
	if (($dia >= 22 && $mes == 11) || ($dia <= 21 && $mes == 12)) {
		$signo = "Sagitario";
	}
	if (($dia >= 22 && $mes == 12) || ($dia <= 20 && $mes == 1)) {
		$signo = "Capricornio";
	}
	if (($dia >= 21 && $mes == 1) || ($dia <= 19 && $mes == 2)) {
		$signo = "Acuario";
	}
	if (($dia >= 20 && $mes == 2) || ($dia <= 20 && $mes == 3)) {
        $signo = "Pisis";
	}
	
    
    echo "<h3>Signos del Zodíaco</h3>";
	echo "<b>Signo: " . $signo."</b>";
?>

    <div class="container">
        <div class="card text-center">
        <div class="card-header">
            Signos del Zodíaco
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
        </div>
    </div>
     
<?php
       require_once('php/pie.php');
?>