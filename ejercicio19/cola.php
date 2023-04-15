<?php 
class Cola{
    private $tipo;
    private $cola;
    public function __construct($tipo)
    {
        $this->cola = array();
        if($tipo == "Normal" || $tipo == "dobleentrada"){
            $this->tipo=$tipo;
        }else{
            echo "El tipo de cola no es correcto";
        }
    }
    function insertaradelante($valor){
        $this->cola = array_unshift($this->cola, $valor);
        return $this->cola;
    }
    function insertardetras($valor){
        $this->cola = array_push($this->cola, $valor);
        return $this->cola;
    }
    function eliminar(){
        $this->cola = array_shift($this->cola);
        return $this->cola;
    }
    function mostrar(){
        foreach ($this->cola as $valor) {
            echo "$valor ";
        }
    }

}
session_start();
if (!isset($_SESSION['Cola'])) {
    $_SESSION['Cola'] = new Cola("Normal");
}
