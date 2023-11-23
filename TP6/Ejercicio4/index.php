<?php
    include 'php/encabezado.php';
?>
<section class = "container">
    <main class = "row">
        <form action = "php/procesa.php" method = "post" enctype = "multipart/form-data" class="bg-light">
            <legend class="bg-warning text-center p-1">Nuevo Juego</legend>
            <section class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name = "titulo" class="form-control" id="titulo" placeholder="Título del juego">
            </section>
            <section class="mb-3">
                <label for="jugadores" class="form-label">Jugadores</label>
                <input type="number" name = "jugadores" class="form-control" id="jugadores" placeholder="Cantidad de jugadores">
            </section>
            <section class="mb-3">
                <label for="lanzamiento" class="form-label">Lanzamiento</label>
                <input type="date" name = "lanzamiento" class="form-control" id="lazamiento" >
            </section>
            <section class="mb-3">
            <label for="genero" class="form-label">Género</label>
                <select class="form-select" aria-label="Default select example" name = "genero" id = "genero">
                    
                    <option value="accion">Acción</option>
                    <option value="aventura">Aventura</option>
                    <option value="cficcion">Ciencia Ficción</option>
                    <option value="comedia">Comedia</option>
                    <option value="drama">Drama</option>
                </select>
            </section>
            <section class="mb-3">
                <label for="portada" class="form-label">Portada</label>
                <input class="form-control" type="file" name = "portada" accept="image/*" id="portada">
            </section>
            <section>
                <input type="submit" value="Guardar" class="btn btn-success m-3 d-block mx-auto">
            </section>
        </form>
    </main>
</section>
<?php
    include 'php/pie.php'
?>
