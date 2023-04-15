<?php
session_start();
if (!isset($_SESSION['numero'])) {
    die("Debe ingresar el valor de n primero.");
}

$numero = $_SESSION['numero'];
// $v1 = $_POST['v1'];
// $v2 = $_POST['v2'];
$arr1 = array();
$arr2 = array();


//recuperamos los valores
for ($i = 0; $i < $numero; $i++) {
    $arr1[$i] = $_POST['v1' . ($i + 1)];
    $arr2[$i] = $_POST['v2' . ($i + 1)];
}

// if (count($v1) != $n || count($v2) != $n) {
//     die("Los vectores no tienen la longitud correcta.");
// }

echo "Vector 1: ";
for ($i = 0; $i < $numero; $i++) {
    echo $arr1[$i] . " ";
}
echo "<br>";
echo "Vector 2: ";
for ($i = 0; $i < $numero; $i++) {
    echo $arr2[$i] . " ";
}


$resultado = 0;
for ($i = 0; $i < $numero; $i++) {
    $resultado += $arr1[$i] * $arr2[$i];
}

echo "<br>";
echo "El resultado de la multiplicación de los vectores es: $resultado";
