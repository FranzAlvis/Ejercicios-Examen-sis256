<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="multiplicacion.php" method="post">
        <?php
        $numero = $_POST['numero'];
        for ($i = 1; $i <= $numero; $i++) {
            echo "<div>";
            echo "<label for='numero$i'>Numero $i: </label>";
            echo "<input type='number' name='numero$i' id='numero$i'>";
            echo "</div>";
        }
        echo "<input type='hidden' name='valorAnterior' value='$numero'>";
        ?>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>