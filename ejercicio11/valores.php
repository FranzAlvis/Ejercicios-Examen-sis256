<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $opcion = $_GET["opcion"];
    switch ($opcion) {
        case 1:
    ?>
            <form action="fibonacci.php" method="get">
                <label for="numero">Ingrese el numero</label>
                <input type="number" name="numero" id="numero">
                <input type="submit" value="Enviar">
            </form>
        <?php
            break;
        case 2:
        ?>
            <form action="calcularmayor.php" method="get">
                <div>
                    <label for="num1">Ingrese 1er numero</label>
                    <input type="number" name="num1" id="num1">
                </div>
                <div>
                    <label for="num2">Ingrese 2do numero</label>
                    <input type="number" name="num2" id="num2">
                </div>
                <div>
                    <label for="num3">Ingrese 3er numero</label>
                    <input type="number" name="num3" id="num3">
                </div>
                <input type="submit" value="Enviar">
            </form>
        <?php
            break;
        case 3:
        ?>
            <form action="piramide.php" method="get">
                <label for="cadena">Ingrese una cadena</label>
                <input type="text" name="cadena" id="cadena">
                <input type="submit" value="Enviar">
            </form>
    <?php
            break;
    }
    ?>

</body>

</html>