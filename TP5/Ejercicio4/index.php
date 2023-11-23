<?php
    $ruta = 'css';
    include 'php/header.php';
    
?>

    <section class = "container text-center">
        <main class = 'row'>
            <form action = "php/consulta.php" method = "POST">
                <legend>Consulta Legajo</legend>
                <fieldset>
                    <label for = "legajo" class = "form-label">N° de Legajo</label>
                    <input type = "number" id = "legajo" name = "legajo" class = "form-control">
                </fieldset>
                <button type="submit" class="btn btn-primary mb-3">Consultar</button>
            </form>
        </main>
    </section>
<?php
    include 'php/pie.php';
?>