<?php
if (isset($_COOKIE['numero'])) {
    $numero = $_COOKIE['numero'];
    $sumatoria = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $sumatoria += $i;
    }
    echo "La sumatoria de los números del 1 al $numero es: $sumatoria";
} else {
    echo "Debe ingresar un número primero.";
}
?>