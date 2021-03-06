<?php
session_start();
if($_SESSION["amvOk"] != true )
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: index.php?sw=false"); 
  exit(); 
} 
?>