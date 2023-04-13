<?php
$numero = $_GET['numero'];
if($numero>=1){
    if($numero % 2 == 0){
        echo "El número $numero es par";
    }else{
        echo "El número $numero es impar";
    }
}else{
    echo "El número $numero no es válido";
}
?>