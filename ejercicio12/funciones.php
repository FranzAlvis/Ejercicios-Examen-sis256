<?php
    function calcularFibonacci($numero)
    {
        $a = 0;
        $b = 1;
        $c = 0;
        $total=1;
        echo "$a + $b + "; //1
        for ($i = 1; $i < $numero; $i++) {
            $c = $a + $b; //1| 2
            $a = $b; // 0 = 1| 
            $b = $c; // 1 = 1| 
            if($numero-1 == $i){
                echo "$c";
            }else{
                echo "$c + "; //0 1 
            }
            $total+=$c;
        }
        echo " = $total";
    }
?>