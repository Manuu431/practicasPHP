<?php

    class Cabecera{

        public function __construct($tit, $ubi, $dim, $colFondo, $colLetra){
            $this->titulo = $tit;
            $this->ubicacion = $ubi;
            $this->dimension = $dim;
            $this->colorFondo = $colFondo;
            $this->colorLetra = $colLetra;
        }

        public function mostrar(){
            echo  "<div style='font-size: $this->dimension; text-align: $this->ubicacion; background-color: $this->colorFondo; color: $this->colorLetra;'>";
            echo  $this->titulo;
            echo "</div>";
        }
    }

    $cabecera = new Cabecera("Título del ejercicio 2", "center", "30px", "blue", "red");
    $cabecera->mostrar();
?>