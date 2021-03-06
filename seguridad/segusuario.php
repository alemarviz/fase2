<?php
session_start();
if($_SESSION["amvOk"] != true)
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: ../inicio.php"); 
  exit(); 
}
else if ($_SESSION["tipo"]>2) 
{
  header("Location: ../erroracceso.php");
  exit();
}
?>