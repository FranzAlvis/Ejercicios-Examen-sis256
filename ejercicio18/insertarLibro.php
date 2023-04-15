<?php session_start(); 
include("estante.php");
$fila = $_GET['fila'];
$libro = $_GET['libro'];
if (isset($_SESSION['estante'])) {
    $estante = unserialize($_SESSION['estante']);
    $estante->insertarLibro($fila,$libro);
}
?>
<h1>libro agregado</h1><br>
<a href="pedirfila.html">Agregar otro libro</a><br>
<a href="index.php">Regresar al menu</a><br>