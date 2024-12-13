<?php
class Cd extends Producto {
    private $duracion;
    private $genero;

    public function __construct($nombre, $precio, $duracion, $genero){
        parent::__construct($nombre, $precio);      //el precio de los CDs es 1€
        $this->duracion = $duracion;
        $this->genero = $genero;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getDescripcion(){
        echo "<h3>Descripción de {$this->nombre}</h3>";
        echo "<p>Duración: {$this->duracion} minutos</p>";
        echo "<p>Género: {$this->genero}</p>";
        echo "<p>Precio: {$this->precio}€</p>";
    }
}

?>