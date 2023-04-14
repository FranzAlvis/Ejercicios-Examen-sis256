<?php
$valorAnterior = $_POST['valorAnterior'];
$total = 1;
for ($i=1; $i <= $valorAnterior ; $i++) { 
    $total *= $_POST['numero'.$i];
}
echo "El resultado es: $total";
?>