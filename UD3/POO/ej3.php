<?php

    class Cabecera{
        
        public function inicializar($tit, $ubi, $dim){
            $this->titulo = $tit;
            $this->ubicacion = $ubi;
            $this->dimension = $dim;
        }

        public function mostrar(){
            echo  "<div style='font-size: $this->dimension; text-align: $this->ubicacion'>";
            echo  $this->titulo;
            echo "</div>";
        }
    }

    $cabecera = new Cabecera();
    $cabecera->inicializar("Ejemplo", "center", "20px");
    $cabecera->mostrar();
?>