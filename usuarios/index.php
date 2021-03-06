<?php 
    include("../seguridad/segusuario.php"); 
    include("../bd/bd_conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   
    <title>Panel del usuarios</title>
</head>
<body>
    <div class="container p-3 my-3 bg-dark text-white">
        <h1>Panel de usuarios</h1>
        <p>Gestor de eventos</p>
    </div>
    <div class="container">    
        <div class="row">
          
            <div class="col-3">
                <img src="/imagenes/usuarios/<?php echo $_SESSION['foto']; ?>" class="rounded" alt="foto">
                <?php 
                    echo "<p>{$_SESSION['usuario']}<br />";
                    echo "Nombre: <strong>{$_SESSION['nombre']}</strong><br/>";
                    echo "Apellidos: <strong>{$_SESSION['apellidos']}</strong><br/>";
                    
                    if ($_SESSION['tipo'] == 1)
                        echo "Tipo: <strong>Administrador</strong><br />";
                    else 
                        echo "Tipo: <strong>Usuario</strong><br />";

                    if (!empty($_SESSION["usuario"])) {
                        echo "<a href='../lib/cerrarsesion.php' title='Cerrar sesión'>Cerrar sesión</a>";
                    }
                    echo "</p>";
                ?>
                <p>AMV - 2020</p>
            </div>

            <div class="col-9">
                <h3>Depuración</h3>
                <p><?php echo "Datos de la sesión: "; print_r($_SESSION); ?></p> 
                <h3>Enlaces</h3>
                <p><a href="../index.php">Inicio del sitio</a></p>
            </div> 

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>