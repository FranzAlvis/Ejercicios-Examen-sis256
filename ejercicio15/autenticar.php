<?php session_start(); // Inicio de sesión
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
if (isset($_SESSION['usuario'])) {
    header("location:index.html");
} else {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['contrasena'] = $contrasena;
    echo "<h1>Entraste como $usuario </h1>";
    echo '<meta http-equiv="refresh" content="2;url=acceso.php">';
}

// header("Location: acceso.php"); redirecciona a la página de acceso.php
