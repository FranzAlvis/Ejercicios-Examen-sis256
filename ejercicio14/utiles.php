<?php
    class Utiles{
        private $cadena;

        public function __construct($cadena){
            $this->cadena = $cadena;
        }

        function aumentarGuines($guion){
            $longitud = strlen($this->cadena);
            $guionesAcumulados="";
            $resultado="";
            for ($i=1; $i <= $guion; $i++) { 
                $guionesAcumulados = $guionesAcumulados."-";
            }
            
            for ($i=0; $i < $longitud; $i++) { 
                if($i == $longitud-1){
                    $resultado = $resultado.$this->cadena[$i];
                }else{
                    $resultado = $resultado.$this->cadena[$i].$guionesAcumulados;
                }
            }
            echo $resultado;
        }
    }
