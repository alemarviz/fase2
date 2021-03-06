<?php 
session_start();
if (isset($_SESSION["tipo"])) {
    if ($_SESSION["tipo"]==1) {
        header("Location: admins/index.php");
    }
    else {
        header("Location: usuarios/index.php");
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css">
</head>
<body>
    <form class="form-signin" action="control.php" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Inicio</h1>
        
        <label for="txtUsuario" class="sr-only">Usuario:</label>
        <input type="Text" class="form-control mb-2" id="txtUsuario" name="txtUsuario" placeholder="usuario" required autofocus>
   
        <label for="txtPasswd" class="sr-only">Contraseña:</label>
        <input type="password" class="form-control mb-2" id="txtPasswd" name="txtPasswd" placeholder="contraseña" required>
   
        <input class="btn btn-lg btn-primary btn-block"  type="Submit" value="ENTRAR">
    
        <p>
        <?php
            if (isset($_GET["sw"])) 
            {
                $sw = $_GET["sw"];
                if ($sw) {
                    echo "Ok!";
                }
                else {
                    echo "Fallo!";
                }
            }
        ?>
        </p>
        <p class="mt-5 mb-3 text-muted">&copy; AMV 2020</p>
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>