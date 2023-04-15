<?php
if (isset($_COOKIE['numero'])) {
    $numero = $_COOKIE['numero'];
    $resultado = $numero / 2;
    echo "La mitad de $numero es: $resultado";
} else {
    echo "Debe ingresar un número primero.";
}
?>