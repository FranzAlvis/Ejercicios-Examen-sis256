<?php
session_start();
if (!isset($_SESSION['estante'])) {
    $_SESSION['estante'] = new Estante();
}

if (isset($_POST['accion'])) {
    $estante = $_SESSION['estante'];

    switch ($_POST['accion']) {
        case 'insertar':
            $fila = $_POST['fila'];
            $libro = $_POST['libro'];
            $estante->insertarLibro($fila, $libro);
            break;
    }

    $_SESSION['estante'] = $estante;
}
?>

<h1>Menú de opciones</h1>

<form method="post" action="index.php">
    <h2>Insertar libro</h2>
    <label for="fila">Fila:</label>
    <select name="fila" id="fila" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <label for="libro">Libro:</label>
    <input type="text" name="libro" id="libro" required>
    <button type="submit" name="accion" value="insertar">Insertar</button>
</form>

<form method="post" action="mostrar.php">
    <h2>Mostrar libros de una fila</h2>
    <label for="fila_mostrar">Fila:</label>
    <select name="fila_mostrar" id="fila_mostrar" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <button type="submit">Mostrar</button>
</form>

<form method="post" action="mostrar.php">
    <h2>Mostrar libros de todas las filas</h2>
    <button type="submit">Mostrar</button>
</form>