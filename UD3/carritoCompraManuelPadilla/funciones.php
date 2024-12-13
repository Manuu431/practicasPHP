<?php
    include 'datos.php';

    function cantidadArticulosCarrito(): int {
        if (isset($_COOKIE["carrito"])){
            $arrayCarrito = unserialize($_COOKIE["carrito"]);
    
            if (is_array($arrayCarrito)){
                $total = 0;
                foreach ($arrayCarrito as $ref => $cantidad){
                    $total += $cantidad;
                }
                return $total;
            }
        }
        return 0;
    }
    
    function escaparate($nombres, $precios, $descripcion){
        echo "
        <table>
            <tr>
                <td>Referencia</td>
                <td>Nombre</td>
                <td>Descripción</td>
                <td>Precio</td>
                <td>Acción</td>
            </tr>
        ";

        foreach ($nombres as $ref => $nombre){
            if (isset($descripcion[$ref])) {
            $descripcionProducto = $descripcion[$ref];
                if(isset($precios[$ref])){
                    $precioProducto = $precios[$ref];
                    echo "
                    <tr>
                        <td>$ref</td>
                        <td>$nombre</td>
                        <td>$descripcionProducto</td>
                        <td>$precioProducto" . "€</td>
                        <td><a href='añadirAlCarro.php?ref=$ref'>Comprar</a></td>
                    </tr>
                    ";
                }
            }            
        }
        echo "</table><br>";
        
        echo "Total de productos en el carrito: " . cantidadArticulosCarrito() . "<br>";
    }

    function mostrar_carrito($carrito){
        echo "
        <table>
            <tr>
                <td>Referencia</td>
                <td>Unidades</td>
            </tr>
        ";

        foreach ($carrito as $ref => $cantidad){
            echo "
            <tr>
                <td>$ref</td>
                <td>$cantidad</td>
            </tr>
            ";
            
        }

        echo "
        <tr>
            <td colspan='2'>Número total de unidades: " . cantidadArticulosCarrito() ."</td>
        </tr>
        </table><br>
        ";
    }
?>