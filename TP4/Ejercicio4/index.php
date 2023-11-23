<?php
    require_once 'php/encabezado.php';
    //include 'php/funciones.php'
?>

    <section class = "container">
        <main class = "formu">
            <form action = "php/procesa.php" method = "POST">
                <h3>INICIAR SESIÓN</h3>
                <p>Ingrese su mail y contraseña</p>
                <div class="mb-3">
                    <input type = "email" class="form-control" id = "email" name = "email">
                    <label for = "email" class="form-label">Email</label>
                </div>
                <div class="mb-3">
                    <input type = "password" class = "form-control" id = "pass" name = "pass">
                    <label for = "pass" class = "form-label">Password</label>
                </div>

                <button type="submit">Login</button>
            </form>
        </main>
    </section>

<?php
    require_once 'php/pie.php';
?>