<?php
include 'videoclub.class.php';
include 'cliente.class.php';
include 'producto.class.php';
include 'pelicula.class.php';
include 'cd.class.php';
include 'juego.class.php';

$videoclub = new Videoclub("Videoclub Juan");
$cliente1 = new Cliente("Juan");
$cliente2 = new Cliente("Ana");
$cliente3 = new Cliente("Lorenzo");
$cliente4 = new Cliente("Lucas");

//agregar clientes
$videoclub->agregarCliente($cliente1);
$videoclub->agregarCliente($cliente2);
$videoclub->agregarCliente($cliente3);
$videoclub->agregarCliente($cliente4);

//PRODUCTOS
//peliculas
$pelicula1 = new Pelicula("Pelicula 1", 2, "Español", 120, "Acción");
$pelicula2 = new Pelicula("Pelicula 2", 2, "Español", 90, "Comedia");
$pelicula3 = new Pelicula("Pelicula 3", 2, "Español", 180, "Terror");
$pelicula4 = new Pelicula("Pelicula 4", 2, "Español", 60, "Acción");
$pelicula5 = new Pelicula("Pelicula 5", 2, "Inglés", 520, "Ficción");
//cd's
$cd1 = new Cd("CD 1", 1, 45, "Pop");
$cd2 = new Cd("CD 2", 1, 60, "Rock");
$cd3 = new Cd("CD 3", 1, 50, "Pop");
$cd4 = new Cd("CD 4", 1, 40, "Jazz");
$cd5 = new Cd("CD 5", 1, 70, "Clásica");
//juegos
$juego1 = new Juego("Juego 1", 3, "PlayStation", "Aventura");
$juego2 = new Juego("Juego 2", 3, "Xbox", "Terror");
$juego3 = new Juego("Juego 3", 3, "PlayStation", "Aventura");
$juego4 = new Juego("Juego 4", 3, "PC", "Acción");
$juego5 = new Juego("Juego 5", 3, "Nintendo Switch", "Deportes");


//clientes y sus productos
//cliente 1
$videoclub->alquilarProducto($cliente1, $pelicula1);
$videoclub->alquilarProducto($cliente1, $pelicula3);
$videoclub->alquilarProducto($cliente1, $cd1);
$videoclub->alquilarProducto($cliente1, $cd4);
$videoclub->alquilarProducto($cliente1, $juego2);

//cliente 2
$videoclub->alquilarProducto($cliente1, $juego3);
$videoclub->alquilarProducto($cliente2, $cd2);
$videoclub->alquilarProducto($cliente2, $cd3);

//cliente 3
$videoclub->alquilarProducto($cliente4, $cd5);

//agregar productos al videoclub para poder mostrarlos
$videoclub->agregarProducto($pelicula1);
$videoclub->agregarProducto($pelicula2);
$videoclub->agregarProducto($pelicula3);
$videoclub->agregarProducto($pelicula4);
$videoclub->agregarProducto($pelicula5);
$videoclub->agregarProducto($cd1);
$videoclub->agregarProducto($cd2);
$videoclub->agregarProducto($cd3);
$videoclub->agregarProducto($cd4);
$videoclub->agregarProducto($cd5);
$videoclub->agregarProducto($juego1);
$videoclub->agregarProducto($juego2);
$videoclub->agregarProducto($juego3);
$videoclub->agregarProducto($juego4);
$videoclub->agregarProducto($juego5);
?>
