<?php
   
    
    
    if (!empty($_GET['usuario']) && !empty($_GET['contrasena'])) {
        include('encabezado.php');
        $usuario = $_GET['usuario'];
        $contrasena = $_GET['contrasena'];
    }
?>

<main>
     <section class="text-center m-5">
          <h2>Usuario ingresado: <?php echo $usuario ?></h2>
          <h2>Contraseña ingresada: <?php echo $contrasena ?></h2>
     </section>
</main>

<?php
    require_once('pie.php');
?>