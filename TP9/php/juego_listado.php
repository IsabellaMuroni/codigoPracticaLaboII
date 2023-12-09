<?php
    $ruta = '../';
    require("encabezado.php");
?>

<main class="container">
    <section class="row">
        <section class="col-3 menu pt-4">
            <?php require("menu.php"); ?>
        </section>
        <article class="col-9 listado pt-2">
            <?php
                require("conexion.php");
                $conexion = conectar();
                if ($conexion) {
                    //consulta SQL para obtener los juegos
                    if ($cantidad > 0) {
                        while (mysqli_stmt_fetch($sentencia)) {
                            ?>
                            <section class="col-5 mt-2 mb-2">
                                <section class="card">
                                    <img src="../img/portadas/<?php //muestre la portada ?>" />
                                    
                                    <section class="card-content p-3">
                                        <h4 class="card-title text-center"><?php //muestre el titulo ?></h4>
                                        <p class="">Jugadores: <?php //muestre los jugadores ?></p>
                                        <p class="">Fecha de lanzamiento: <?php //muestre la fecha de lanzamiento ?></p>
                                        <p class="btn btn-primary"><?php //muestre el género ?></p>
                                    </section>
                                </section>
                            </section>
                            <?php
                        }
                    } else {
                        echo '<h2>No hay resultados</h2>';
                    }
                    desconectar($conexion);
                }
                ?>
        </article>
    </section>
</main>

<?php
    require("pie.php");
?>