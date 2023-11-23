<section>
    <main>
        <table class="table table-striped">
            <tr class="table-info">
                <th>Usuario</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
    <?php
        //include '../Ejercicio1/txt/log.txt';
        include 'php/encabezado.php';

        //Manipulo el archivo para mostrar datos
        $ubicacion = '../Ejercicio1/txt/log.txt';
        $archivo = fopen($ubicacion, 'r');//abro par la lectura
        while(!feof($archivo))
        {
            $linea = fgets($archivo);//obtengo la linea
            if($linea != '')
            {
                $separado = explode(';', $linea);
                echo '<tr>';
                echo '<td>' . $separado[0]; '</td>';
                echo '<td>' . $separado[1]; '</td>';
                echo '<td>' . $separado[2]; '</td>';
                echo '</tr>';
            }
        }

        fclose($archivo);
    ?>

        </table>
    </main>
</section>


<?php
    include 'php/pie.php';
?>