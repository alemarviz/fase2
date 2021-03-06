<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fin de sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container p-3 my-3 bg-secondary text-white">
        <h1>Fin de la sesión</h1>
        <p>Gestor de eventos</p>
    </div>
    <div class="container">
        <h3>Depuración</h3>
        <p><?php echo "Datos de la sesión: "; print_r($_SESSION); ?></p> 
        <p><a href="/index.php">Inicio del sitio</a></p>
    </div>
</body>
</html>