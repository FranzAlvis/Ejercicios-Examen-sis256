<?php
class Examen
{
    private $n;
    private $cadena;
    private $a;
    private $b;
    private $c;
    function __construct($n = null, $cadena = null, $a = null, $b = null, $c = null)
    {
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function calcularFibonacci()
    {
        $a = 0;
        $b = 1;
        $c = 0;
        echo "$b "; //1
        for ($i = 1; $i < $this->n; $i++) {
            $c = $a + $b; //1| 2
            $a = $b; // 0 = 1| 
            $b = $c; // 1 = 1| 
            echo "$c "; //0 1 
        }
    }
    public function calcularMayor()
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        if ($a > $b && $a > $c) {
            echo '<p><strong>' . $a . '</strong></p>';
            echo '<p>' . $b . '</p>';
            echo '<p>' . $c . '</p>';
        } else if ($b > $a && $b > $c) {
            echo '<p>' . $a . '</p>';
            echo '<p><strong>' . $b . '</strong></p>';
            echo '<p>' . $c . '</p>';
        } else if ($c > $a && $c > $b) {
            echo '<p>' . $a . '</p>';
            echo '<p>' . $b . '</p>';
            echo '<p><strong>' . $c . '</strong></p>';
        } else {
            echo "Los numeros ingresados son iguales";
        }
    }
    public function piramide()
    {
        $longitud = strlen($this->cadena);
        $cadena = $this->cadena;
        $contador = $longitud / 2 - 1;//2
        $aux = $contador;
        echo '<table border="1px">';

        for ($i = 0; $i < $longitud; $i++) {
            echo "<tr>";
            $contador = $contador - $i;//1
            for ($j = 0; $j < ($longitud - $i - 2); $j++) {
                echo "<td>&nbsp</td>";
            }

            for ($j = 0; $j <= $i; $j++) {
                echo "<td>$cadena[$aux]</td>";
                $aux++;
            }
            $aux = $contador;
            // while ($a >= $i) {
            //     echo "<td>$cadena[$contador]</td>";
            //     $contador++;
            //     $a--;
            // }

            // for ($j = 0; $j < ($longitud - $i - 1); $j++) {
            //     echo "<td>&nbsp;</td>";
            // }
            echo "</tr>";
        }

        echo "</table>";
    }
}
