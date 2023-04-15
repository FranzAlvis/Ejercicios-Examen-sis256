<?php
session_start();
if (!isset($_SESSION['estante'])) {
    die("Debe insertar al menos un libro.");
}

$estante = $_SESSION['estante'];

if (isset($_POST['fila_mostrar'])) {
    $fila = $_POST['fila_mostrar'];
    echo "<h1>Libros de la fila $fila</h1>";
    $estante->mostrar($fila);
} else {
    echo "<h1>Libros del estante</h1>";
    $estante->mostrararmario();
}
?>