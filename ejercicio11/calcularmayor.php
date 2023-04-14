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
    include("examen.php");
    $a = $_GET["num1"];
    $b = $_GET["num2"];
    $c = $_GET["num3"];
    $examen = new Examen(null,null,$a, $b, $c);
    $examen->calcularMayor();
    ?>

    <br>
    <a href="index.php">Volver al menu</a>
</body>

</html>