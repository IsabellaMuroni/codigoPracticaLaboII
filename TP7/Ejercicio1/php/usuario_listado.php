<?php
    $ruta = '../';
    require("encabezado.php");       
?>
                <main class="container">
                    <section>
                        <article class="row">
                            <section class="menu_tmp">
                                <a class="btn btn-dark" href="usuario_alta.php">+ Alta usuario</a>
                            </section>
                            <table class="table table-bordered table-hover table-striped w-auto">
                                <caption class="caption-top text-center bg-dark">Listado de usuarios</caption>
                                <tr>
                                    <th class="bg-secondary text-white">Foto</th>
                                    <th class="bg-secondary text-white">Usuario</th>
                                    <th class="bg-secondary text-white">Tipo</th>
                                </tr>
                                <?php
                                    include 'procesaMostrar.php';
                                ?>
                                
                            </table>
                        </article>
                    </section>
                </main>



<?php
    require("pie.php");
?>