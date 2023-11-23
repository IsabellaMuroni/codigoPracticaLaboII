<?php
    require_once 'php/encabezado.php';
    //include 'php/funciones.php'
?>

    <section class = "container">
        <main class = "formu">
            <form action = "php/logueo.php" method = "POST">
                <h3>INICIAR SESIÓN</h3>
                <p>Ingrese su usuario y contraseña</p>
                <div class="mb-3">
                    <input type = "text" class="form-control" id = "user" name = "user">
                    <label for = "text" class="form-label">Usuario</label>
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