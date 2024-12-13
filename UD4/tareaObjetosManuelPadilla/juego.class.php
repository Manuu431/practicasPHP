<?php
class Juego extends Producto {
    private $plataforma;
    private $genero;

    public function __construct($nombre, $precio, $plataforma, $genero){
        parent::__construct($nombre, $precio);      //el precio de los juegos es 3€
        $this->plataforma = $plataforma;
        $this->genero = $genero;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getDescripcion(){
        echo "<h3>Descripción de {$this->nombre}</h3>";
        echo "<p>Plataforma: {$this->plataforma}</p>";
        echo "<p>Género: {$this->genero}</p>";
        echo "<p>Precio: {$this->precio}€</p>";
    }
}

?>