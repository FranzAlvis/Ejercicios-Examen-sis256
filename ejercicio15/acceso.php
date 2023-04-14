<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['contrasena'])) {
        if ($_SESSION['usuario'] == "admin" && $_SESSION['contrasena'] == "admin") {
            echo "Bienvenido " . $_SESSION['usuario'];
    ?>
            <ul>
                <li>Crear</li>
                <li>Listar</li>
                <li>Borrar</li>
                <li>Salir</li>
            </ul>
            <br>
            <a href="index.html">Cerrar Sesion</a>
        <?php
        } else {
            echo "Bienvenido " . $_SESSION['usuario'];
        ?>
            <ul>
                <li>Listar</li>
            </ul>
            <br>
            <a href="index.html">Cerrar Sesion</a>
    <?php
        }
    } else {
        echo "No tienes permisos para acceder a esta pagina";
        echo "<meta http-equiv='refresh' content='2;url=index.html'>";
    }
    ?>

</body>

</html>