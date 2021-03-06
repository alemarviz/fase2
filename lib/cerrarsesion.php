<?php
session_start();
unset($_SESSION['amvOk']);
unset($_SESSION['usuario']);
unset($_SESSION['tipo']);
session_unset();
session_destroy();
header("Location: /findesesion.php");
?>