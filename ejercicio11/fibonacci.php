<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sucesion de fibonacci</h1>
    <?php
    include("examen.php");
    $n = $_GET["numero"];
    $examen = new Examen($n);
    $examen->calcularFibonacci();
    ?>

    <br>
    <a href="index.php">Volver al menu</a>
</body>

</html>