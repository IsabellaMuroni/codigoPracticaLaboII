<?php
    require_once 'php/encabezado.php';
    include 'php/funciones.php'
?>

    <section class = "container">
        <main class = "formu">
            <form action = "php/procesa.php" method = "POST">
                <legend>Financiera</legend>
                <label for = "deposito" class = "form-label">Depósito inicial</label>
                <input type = "number" id = "deposito" name = "deposito" class = "form-control">

                <fieldset>
                    <legend>Plazo:</legend>
                    <section class="form-check form-switch">
                        <label for = "30">30 días</label>
                        <input class="form-check-input" value = "30" type="checkbox"  id = "30" name = "plazo">
                    </section>
                    <section class="form-check form-switch">
                        <label  for="45">45 días</label>
                        <input class="form-check-input" value = "45" type="checkbox" id="45" name = "plazo">
                    </section>
                    <section class="form-check form-switch">
                        <label  for="60">60 días</label>
                        <input class="form-check-input" value = "60" type="checkbox"  id="60" name = "plazo">
                    </section>
                    <section class="form-check form-switch">
                        <label  for="90">90 días</label>
                        <input class="form-check-input" value = "90" type="checkbox" id="90" name = "plazo">
                    </section>

                </fieldset>

                <button type="submit" class="btn btn-primary mb-3">Simular</button>
            </form>
        </main>
    </section>

<?php
    require_once 'php/pie.php';
?>