<?php
session_start();
echo "<p>amvOK: ".$_SESSION['amvOk']."</p>";
echo "<p>usuario: ".$_SESSION['usuario']."</p>";
echo "<p>nombre: ".$_SESSION['nombre']."</p>";
echo "<p>apellidos: ".$_SESSION['apellidos']."</p>";
echo "<p>Tipo: ".$_SESSION['tipo']."</p>";
echo '<a href="/index.php">Página de inicio</a>';
?>