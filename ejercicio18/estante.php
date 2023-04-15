<?php
class Estante {
    private $fila1 = array();
    private $fila2 = array();
    private $fila3 = array();
    private $tope1 = 0;
    private $tope2 = 0;
    private $tope3 = 0;

    public function __construct() {
        $this->fila1 = array();
        $this->fila2 = array();
        $this->fila3 = array();
        $this->tope1 = 0;
        $this->tope2 = 0;
        $this->tope3 = 0;
    }

    public function insertarLibro($fila, $libro) {
        switch ($fila) {
            case 1:
                $this->fila1[$this->tope1++] = $libro;
                break;
            case 2:
                $this->fila2[$this->tope2++] = $libro;
                break;
            case 3:
                $this->fila3[$this->tope3++] = $libro;
                break;
        }
    }

    public function mostrar($fila) {
        switch ($fila) {
            case 1:
                for ($i = 0; $i < $this->tope1; $i++) {
                    echo $this->fila1[$i] . "<br>";
                }
                break;
            case 2:
                for ($i = 0; $i < $this->tope2; $i++) {
                    echo $this->fila2[$i] . "<br>";
                }
                break;
            case 3:
                for ($i = 0; $i < $this->tope3; $i++) {
                    echo $this->fila3[$i] . "<br>";
                }
                break;
        }
    }

    public function mostrararmario() {
        echo "<h2>Fila 1</h2>";
        $this->mostrar(1);
        echo "<h2>Fila 2</h2>";
        $this->mostrar(2);
        echo "<h2>Fila 3</h2>";
        $this->mostrar(3);
    }
}
