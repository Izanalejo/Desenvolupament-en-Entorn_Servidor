<?php
/*
Dado un array que representa las ventas de distintos productos en diferentes tiendas:
$ventas = [
    ["tienda" => "Madrid", "producto" => "Laptop", "cantidad" => 5],
    ["tienda" => "Madrid", "producto" => "Tablet", "cantidad" => 3],
    ["tienda" => "Barcelona", "producto" => "Laptop", "cantidad" => 2],
    ["tienda" => "Madrid", "producto" => "Smartphone", "cantidad" => 8],
    ["tienda" => "Barcelona", "producto" => "Smartphone", "cantidad" => 4]
];
Escribe un código que calcule:
La cantidad total vendida de cada producto.
La cantidad total vendida en cada tienda.
Procesar arrays asociativos con datos complejos y realizar operaciones de agregación.*/

$ventas = [
    ["tienda" => "Madrid", "producto" => "Laptop", "cantidad" => 5],
    ["tienda" => "Madrid", "producto" => "Tablet", "cantidad" => 3],
    ["tienda" => "Barcelona", "producto" => "Laptop", "cantidad" => 2],
    ["tienda" => "Madrid", "producto" => "Smartphone", "cantidad" => 8],
    ["tienda" => "Barcelona", "producto" => "Smartphone", "cantidad" => 4]
];

function agruparPorProducto($ventas): array {
    $agrupadosPorProducto = [];

    foreach($ventas as $venta){
        $producto = $venta['producto'];
        $agrupadosPorProducto[$producto][] = $venta; 
    }
    return $agrupadosPorProducto;
}

function agruparPorTienda($ventas): array {
    $agrupadosPorTienda = [];
    foreach($ventas as $venta){
        $tienda = $venta['tienda'];
        $agrupadosPorTienda[$tienda][] = $venta; 
    }
    return $agrupadosPorTienda;
}
function imprimirProductosPorTienda($agrupados){
    echo "<h2>PRODUCTOS VENDIDOS POR TIENDA: </h2>";

    foreach($agrupados as $tienda => $ventas){
        $total = 0;
        foreach($ventas as $venta){
            $total += $venta['cantidad'];
        }
        echo "<h3>$tienda: $total Unidades</h3>";
    }
    
}

function imprimirProductosVendidos($agrupados){
    echo "<h2>PRODUCTOS TOTALES VENDIDOS: </h2>";

    foreach($agrupados as $producto => $ventas){
        $total = 0;
        foreach($ventas as $venta){
            $total += $venta['cantidad'];
        }
         echo "<h3>$producto:  $total Unidades</h3>";
    }
}

$agrupados = agruparPorProducto($ventas);
imprimirProductosVendidos($agrupados);

$agrupadosPorTienda = agruparPorTienda($ventas);
imprimirProductosPorTienda($agrupadosPorTienda);

?>