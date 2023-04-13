<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <?php
        $filas = $_GET['filas'];
        $columnas = $_GET['columnas'];

        $myArr = array("rojo", "amarillo", "verde");
        $contador = 0;
        for ($i = 1; $i <= $filas; $i++) {
            echo '<tr>';
            if($contador == 3){
                $contador = 0;
            }
            for ($j = 1; $j <= $columnas; $j++) {
                echo '<td class="' . $myArr[$contador] . '">&nbsp&nbsp&nbsp</td>';
            }
            $contador++;
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>