<?php
class Cliente {
    private $nombre;
    private $productosAlquilados;

    function __construct($nombre){
        $this->nombre = $nombre;
        $this->productosAlquilados = [];
    }

    public function getNombre(){
        return $this->nombre;
    }

    function alquilarProducto($producto){
        $this->productosAlquilados[] = $producto;
    }

    public function __toString(){
        if($this -> productosAlquilados != []){
            $info = "Cliente: {$this->nombre}<br>Productos alquilados:<br><ul>";
        }
        else{
            $info = "Cliente: {$this->nombre}<br>Este cliente no tiene ningún producto alquilado.<br><ul>";
        }
        foreach ($this->productosAlquilados as $producto) {
            $info .= "<li>$producto</li>";
        }
        $info .= "</ul>";
        return $info;
    }
}

?>