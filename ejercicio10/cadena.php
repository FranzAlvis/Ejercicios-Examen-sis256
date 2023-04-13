<?php
$mensaje = $_GET['mensaje'];
echo "mensaje ingresado: $mensaje";	
echo "<br>";
echo "<br>";
if (stristr($mensaje, "SCRIPT")) {
    echo "tiene la palabra SCRIPT";	
    echo "<br>";
    $mensaje = str_ireplace("SCRIPT", "*", $mensaje);
    echo "<br>";
    echo "Mensaje sin la palabra SCRIPT reemplazando por un *: ";	
    echo "<br>";
    echo $mensaje;
}else{
    echo "no tiene la palabra SCRIPT";
}

?>
