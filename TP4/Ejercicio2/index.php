<?php
    require_once 'php/encabezado.php';
    include 'php/funciones.php'
?>

    <section class = "container">
        <main class = "formu">
            <form action = "php/procesa.php" method = "POST">
                <label for = "monto" class = "form-label">Monto Disponible</label>
                <input type = "number" id = "monto" name = "monto" class = "form-control">

                <label for = "divisa" class = "form-label">Divisa</label>
                    <select class="form-select" name="divisa" id="divisa">
                        <option value = "USD">Dólar</option>
                        <option value = "BRL">Real</option>
                        <option value = "EUR">Euro</option>
                        <option value = "CNH">Yuan</option>
                    </select>

                <button type="submit" class="btn btn-primary mb-3">Comprar</button>
            </form>
        </main>
    </section>

<?php
    require_once 'php/pie.php';
?>