<?php
    include("utiles.php");
    $cadena = $_GET['cadena'];
    $numero = $_GET['numero'];
    $util = new Utiles($cadena);
    $util->aumentarGuines($numero);
?>