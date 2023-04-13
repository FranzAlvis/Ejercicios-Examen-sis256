<?php
$dia = $_GET['dia'];
$myArr = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
echo "<select>";
for ($i=0; $i < 7; $i++) { 
    if($i+1 == $dia){
        echo "<option selected>$myArr[$i]</option>";
    }else{
        echo "<option>$myArr[$i]</option>";
    }
}
echo "</select>";
?>