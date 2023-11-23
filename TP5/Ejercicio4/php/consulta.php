<?php
    $ruta = '../css';
    include 'header.php';

    if ( !empty ( $_POST['legajo'] ) )
    {
        $legajo = $_POST['legajo'];

        //manipulando archivos
        $ubicacion = '../txt/';
        $nombreArchivo = 'sueldos.txt';
        $archivo = fopen($ubicacion.$nombreArchivo, 'r');

        while(!feof($archivo))
        {
            $linea = fgets($archivo);

            if($linea != '')
            {
                $linea = trim($linea);
                $datos = explode(';', $linea);

                if($datos[0] == $legajo)
                {
                    //echo '<p>Legajo: ' . $datos[0] . '</p>';
                    //echo '<p>Apellido y Nombre: ' . $datos[1] . ', ' . $datos[2] . '</p>';
                    //echo '<p>Suelo a cobrar: $' . number_format($datos[3], 2, ',', '.') . '</p>';
                    ?>
                    <section class="container">
                              <h1 class="col-12 m-3">Consulta de sueldo</h1>
                              <section class="row">
                                   <section class="col-md-3 text-start" style="border: 3px solid lightblue; border-radius: 1em">
                                        <h3 class="m-3">Legajo:</h3>
                                        <p class="m-3"><?php echo $legajo ?></p>
                                   </section>
                                   <section class="col-md-9 text-start" style="border: 3px solid orange; border-radius: 1em">
                                        <h3 class="m-3">Apellido y nombre:</h3>
                                        <p class="m-3"><?php echo $datos[1].','.$datos[2] ?></p>
                                   </section>
                              </section>
                              <section class="row">
                                   <section class="col-md-12" style="border: 3px solid red; border-radius: 1em">
                                        <h3 class="m-3">Sueldo a cobrar:</h3>
                                        <p class="m-3">$ <?php echo number_format($datos[3], 2, ',', '.'); ?></p>
                                   </section>
                              </section>
                         </section>
                <?php
                }
                else
                {
                    $mensaje = 'error';
                }
                
            }
        }
        if($mensaje = 'error')
        {
            echo 'Legajo Incorrecto';
            header('refresh:3; url=../index.php');
        }
        fclose($archivo);
    }
    else
    {
        echo '<h1>Legajo inexistente</h1>';
        header('refresh:3; url=../index.php');
    }
?>

<?php
    include 'pie.php';
?>