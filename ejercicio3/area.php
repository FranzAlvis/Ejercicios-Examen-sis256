<?php
$base = $_GET['base'];
$altura = $_GET['altura'];
// a=(b*h)/2
$area = ($base * $altura) / 2;
echo "El área del triángulo es: $area";
?>