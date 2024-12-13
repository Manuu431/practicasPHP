<?php
class Videoclub {
    private $nombre;
    private $clientes = [];
    private $productos = [];

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function agregarCliente($cliente){
        $this->clientes[] = $cliente;
    }

    public function agregarProducto($producto){
        $this->productos[] = $producto;
    }

    public function alquilarProducto($cliente, $producto){
        $cliente->alquilarProducto($producto);
    }

    public function retMostrarClientes(){
        $retClientes = "<h3>Clientes</h3><ul>";
        foreach ($this->clientes as $cliente) {
            $retClientes .= "<li>$cliente</li><br>";
        }
        $retClientes .= "</ul>";
        return $retClientes;
    }

    public function retMostrarProductos(){
        $peliculas = [];
        $cds = [];
        $juegos = [];

        foreach ($this->productos as $producto){
            if ($producto instanceof Pelicula){
                $peliculas[] = $producto;
            }
            elseif ($producto instanceof Cd){
                $cds[] = $producto;
            }
            elseif ($producto instanceof Juego){
                $juegos[] = $producto;
            }
        }

        $retProductos = "<h3>Productos</h3>";
        //peliculas
        if($peliculas != []){
            $retProductos .= "<h4>Peliculas:</h4><ul>";
            foreach ($peliculas as $pelicula) {
                $retProductos .= "<li>$pelicula</li>";
              
            }
            $retProductos .= "</ul>";
        }
        else{
            $retProductos .= "<p>No hay productos de peliculas</p><br>";
        }
        //cd's
        if($cds != []){
            $retProductos .= "<h4>CD's:</h4><ul>";
            foreach ($cds as $cd) {
                $retProductos .= "<li>$cd</li>";
            }
            $retProductos .= "</ul>";
        }
        else{
            $retProductos .= "<p>No hay productos de CD's</p><br>";
        }
        //juegos
        if($juegos != []){
            $retProductos .= "<h4>Juegos:</h4><ul>";
            foreach ($juegos as $juego) {
                $retProductos .= "<li>$juego</li>";
            }
            $retProductos .= "</ul>";
        }
        else{
            $retProductos .= "<p>No hay productos de juegos</p><br>";
        }
        return $retProductos;
    }

    public function buscarPorNombre($nombreProducto){
        foreach($this->productos as $producto){
            if($producto->getNombre() == $nombreProducto){
                return $producto;
            }
        }
        return null;
    }

    public function __toString(){
        $funcionesEnteras = "<h2>Videoclub: {$this->nombre}</h2>";
        $funcionesEnteras .= $this->retMostrarClientes();
        $funcionesEnteras .= $this->retMostrarProductos();

        return $funcionesEnteras;
    }
}
?>