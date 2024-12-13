<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: 0.2em solid black;
        border-radius: 0.4em;
        width: 80%;
        margin: auto;
    }
    tr, td{
        border-collapse: collapse;
        border: 0.1em solid black;
        width: 1em;
    }
</style>
<body>
    
</body>
</html>

<?php
    class Tabla{
        private $tabla;
        private $filas;
        private $columnas;

        public function __construct($fil, $col){
            $this->tabla = array();
            $this->filas = $fil;
            $this->columnas = $col;
        }

        public function cargar($filas, $columnas, $valor){
            $this->tabla[$filas][$columnas] = $valor;
        }

        public function iniciarTabla(){
            echo "<table>";
        }

        public function iniciarTr(){
            echo "<tr>";
        }

        public function mostrarCelda($fi, $co){
            echo "<td>" . $this->tabla[$fi][$co] . "</td>";
        }

        public function finTr(){
            echo "</tr>";
        }

        public function finTabla(){
            echo "</table>";
        }

        public function mostrar(){
            $this->iniciarTabla();
            for ($f = 0; $f < $this->filas; $f++){
                $this->iniciarTr();
                for($c = 0; $c < $this->columnas; $c++){
                    $this->mostrarCelda($f, $c);
                }
                $this->finTr();
            }
            $this->finTabla();
        }
    }

    $tabla1 = new Tabla(3, 3);
    $tabla1->cargar(2, 2, "Hola");

    $tabla1->mostrar();    
?>