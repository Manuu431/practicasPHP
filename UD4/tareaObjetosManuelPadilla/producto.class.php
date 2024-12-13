<?php
abstract class Producto {
    protected $nombre;
    protected $precio;

    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public abstract function getPrecio();

    public abstract function getDescripcion();

    public function getNombre(){
        return $this->nombre;
    }

    public function __toString() {
        $producto = "<a href='productos.php?nombreProducto={$this->nombre}'>{$this->nombre}</a> - Precio: {$this->getPrecio()}€";
        return $producto;
    }
}

?>