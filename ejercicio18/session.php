<?php session_start();
include("estante.php");
$fila = $_GET['fila'];
$libro = $_GET['libro'];
$_SESSION['fila'] = $fila;
$_SESSION['libro'] = $libro;
if (!isset($_SESSION['estante'])) {
    $_SESSION['estante'] = new Estante();
}
header("Location: insertarLibro.php");
?>