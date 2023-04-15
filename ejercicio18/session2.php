<?php session_start();
$fila = $_GET['fila'];
$_SESSION['fila'] = $fila;
header("Location: mostrar.php");
?>