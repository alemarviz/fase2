<?php
$sw=false;
$swDebug = false;
if(count($_POST)>0) {
    $cn = mysqli_connect("localhost","root","","web2020")
        or die("Error 0 (Conexión): ".mysqli_connect_error());
    
    $usuario = isset($_POST["txtUsuario"]) ? $_POST["txtUsuario"] : "vacio";
    $contra = isset($_POST["txtPasswd"]) ? $_POST["txtPasswd"]: "vacio";

    // Evitamos la inyección de código 
    $usuario = mysqli_real_escape_string($cn, $usuario);
    $contra = mysqli_real_escape_string($cn, $contra);

    $cons = "SELECT * FROM usuarios WHERE correo='$usuario' and passwd = '$contra'";
    echo "<p>Depur> $cons</p>";

    $res = mysqli_query($cn, $cons) or die("Error 1 (consulta): ".mysqli_error($cn));
    $fila = mysqli_fetch_array($res) or die("Error 2 (registro): ".mysqli_error($cn));

	if($fila) {
        $sw = true;
        // Otros datos 
        $tipo = $fila["tipo"];
        $nombre = $fila["nombre"];
        $apellidos = $fila["apellidos"];
        $foto = $fila["foto"];

        // Sesión de usuario
        session_start();
        $_SESSION["amvOk"] = true;
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nombre"] = $nombre;
        $_SESSION["apellidos"] = $apellidos;
        $_SESSION["foto"] = $foto;
        $_SESSION["tipo"] = $tipo;
        if ($tipo == 1) {
            header("location: /admins/index.php");
        }
        else {
            header("location: /usuarios/index.php");
        }
        if ($swDebug) header("location: /lib/versesion.php");
            else exit();
    }
}
else header("location: inicio.php?sw=$sw");
?>