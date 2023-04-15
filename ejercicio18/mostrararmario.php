<?php
session_start();

if (isset($_SESSION['fila'])) {
    $fila = $_SESSION['fila'];
    echo "<table border='1'>";
    foreach ($armario as $clave => $valor) {
        echo "<tr><td>$clave</td><td>$valor</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay libros en el armario";
}
