<?php
$a = 0;
$b = 1;
$c = 0;
$numero = $_COOKIE['numero'];
echo "$a $b "; //1
for ($i = 1; $i < $numero; $i++) {
    $c = $a + $b; //1| 2
    $a = $b; // 0 = 1| 
    $b = $c; // 1 = 1| 
    echo "$c "; //0 1 
}
