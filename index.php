<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Eventos</a>
        </div>
        </nav>
        <div class="jumbotron text-center">
            <h1>Gestor de eventos</h1>
            <p>Modelo de proyecto | Parte pública</p> 
        </div>        
    </header>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>Usuarios</h3>
                <?php
                    if (isset($_SESSION["amvOk"])) 
                    {
                        echo "<p>Usuario activo: ".$_SESSION['usuario']."<br />";
                        if ($_SESSION["tipo"]==1)
                            echo "<a href='/admins/index.php'>Panel de administradores</a>";
                        else
                            echo "<a href='/usuarios/index.php'>Panel de usuarios</a>";
                        echo "</p>";
                        echo "<p><a href='/lib/cerrarsesion.php'>Cerrar sesión</a></p>";
                    }
                    else {
                        echo "<p><a href='/inicio.php'>Usuarios</a></p>";
                    }
                ?>
				<p>AMV - 2020</p>
            </div>
            <div class="col-8">
                <h3>Depuración</h3>
                <p><?php echo "Datos de la sesión: "; print_r($_SESSION); ?></p> 
            </div>
        </div>
    </div>
</body>
</html>