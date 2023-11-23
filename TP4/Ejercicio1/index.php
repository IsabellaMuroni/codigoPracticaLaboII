<?php
    require_once 'php/encabezado.php';
    include 'php/funciones.php';

    const APORTE_JUBILATORIO = 13;
    const OBRA_SOCIAL = 3.5;
?>
    <section class = 'container'>
        <main class = 'row'>
            <h1>Aumento de sueldo sobre $250.000</h1>
            
            <table class="table table-striped">
                <tr>
                    <th class="table-success">Porcentaje</th>
                    <th class="table-success">Sueldo Neto</th>
                </tr>

                <?php
                    for ($i = 15; $i <21 ; $i++) 
                    {
                        echo '<tr>';
                        echo '<td>' . $i . '</td>';
                        echo '<td>' . number_format(calcularSueldoNeto($i, APORTE_JUBILATORIO, OBRA_SOCIAL), 2, ',', '.') . '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>

         
        </main>

    </section>

<?php
    require_once 'php/pie.php';
?>