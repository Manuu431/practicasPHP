<?php
class Pelicula extends Producto {
    private $idioma;
    private $duracion;
    private $genero;

    public function __construct($nombre, $precio, $idioma, $duracion, $genero){
        parent::__construct($nombre, $precio);      //el precio de las películas es 2€
        $this->idioma = $idioma;
        $this->duracion = $duracion;
        $this->genero = $genero;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getDescripcion(){
        echo "<h3>Descripción de {$this->nombre}</h3>";
        echo "<p>Idioma: {$this->idioma}</p>";
        echo "<p>Duración: {$this->duracion} minutos</p>";
        echo "<p>Género: {$this->genero}</p>";
        echo "<p>Precio: {$this->precio}€</p>";
    }
}

?>