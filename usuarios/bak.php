<?php include("../seguridad/segusuario.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de usuario</title>
</head>
<body>
    <h1>Panel de usuario</h1>
    <p>
    <?php 
        echo "<p>Usuario: ".$_SESSION['usuario']." "; 
        if (! empty($_SESSION["usuario"])) {
            echo "<a href='/lib/cerrarsesion.php' title='Cerrar sesión'>Cerrar sesión</a>";
        }
    ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <p>Document root: [<?php echo $_SERVER['DOCUMENT_ROOT']; ?>]</p>
    <p><?php print ini_get('include_path'); ?></p>
    <p>AMV - 2019 <a href="/index.php">Inicio del sitio</a></p>
</body>
</html>