<?php
session_start();
include("cola.php");
// Si no existe la variable de sesión "cola", la creamos
// Si se ha pulsado el botón "Insertar Delante"
if (isset($_POST['insertardelante'])) {
    $elemento = $_POST['elemento'];
    $_SESSION['Cola']->insertardelante($elemento);
}

// Si se ha pulsado el botón "Insertar Detrás"
if (isset($_POST['insertardetras'])) {
    $elemento = $_POST['elemento'];
    $_SESSION['Cola']->insertardetras($elemento);
}

// Si se ha pulsado el botón "Eliminar"
if (isset($_POST['eliminar'])) {
    $_SESSION['Cola']->eliminar();
}

// Mostramos el menú
?>
<html>
<head>
    <title>Cola</title>
</head>
<body>
    <h1>Cola</h1>
    <form method="post">
        <label for="elemento">Elemento:</label>
        <input type="text" id="elemento" name="elemento">
        <br>
        <br>
        <input type="submit" name="insertardelante" value="Insertar Delante">
        <input type="submit" name="insertardetras" value="Insertar Detrás">
        <input type="submit" name="eliminar" value="Eliminar">
        <br>
        <br>
        <label for="tipo">Tipo de cola:</label>
        <select id="tipo" name="tipo">
            <option value="Normal">Normal</option>
            <option value="dobleentrada">Doble Entrada</option>
        </select>
        <br>
        <br>
        <input type="submit" name="cambiartipo" value="Cambiar Tipo">
        <input type="submit" name="mostrar" value="Mostrar">
    </form>
</body>
</html>