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
    ["tienda" => "Madrid", 
    "producto" => "Laptop", 
    "cantidad" => 5,
    "precio" => 50 ],

    ["tienda" => "Madrid", "producto" => "Tablet", "cantidad" => 3],
    ["tienda" => "Barcelona", "producto" => "Laptop", "cantidad" => 2],
    ["tienda" => "Madrid", "producto" => "Smartphone", "cantidad" => 8],
    ["tienda" => "Barcelona", "producto" => "Smartphone", "cantidad" => 4]
];

function agruparPorProducto($ventas): array {
    $agrupadosPorProducto = [];

    foreach($ventas as $venta){
        $producto = $venta['producto'];
    
        $agrupadosPorProducto[$producto][] = $venta['cantidad']; 
    }
    return $agrupadosPorProducto;
}
function imprimirProductosTotales($arrayAgrupado){
    echo "<h2>Cantidad vendida de cada producto</h2>";

    foreach ($arrayAgrupado as $producto => $arrayCantidad) {
        echo "<pre>";
        echo "<h3>$producto</h3> Quantitat:" . array_sum($arrayCantidad);
    }

}

function agruparPorTienda($ventas): array {
    $agrupadosPorTienda = [];

    foreach($ventas as $venta){
        $tienda = $venta['tienda'];

        $agrupadosPorTienda[$tienda][] = $venta['cantidad'];
    }
   return $agrupadosPorTienda;
}

function imprimirPorTienda($arrayAgrupado){
    echo "<h2>Cantidad vendida por tienda</h2>";

    foreach ($arrayAgrupado as $tienda => $arrayCantidad) {
        echo "<pre>";
        echo "<h3>$tienda </h3> Quantitat:" . array_sum($arrayCantidad);
    }

}
//main

$agrupadosPorProductos = []; //Creo un array vacío

$agrupadosPorProductos = agruparPorProducto($ventas); // Aqui añado información al array creado a partir de la función agruparPorProducto

imprimirProductosTotales($agrupadosPorProductos); 

$agrupadosPorTienda = [];

$agrupadosPorTienda = agruparPorTienda($ventas);

imprimirPorTienda($agrupadosPorTienda);



//////////////////////////////////////////////////////////////////////////
/* 
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
 */

//main
/*  $agrupadosPorProducto = agruparPorProducto($ventas);
/* imprimirProductosVendidos($agrupadosPorProducto);

$agrupadosPorTienda = agruparPorTienda($ventas);
imprimirProductosPorTienda($agrupadosPorTienda); 
 
        echo "<pre>";
       print_r($agrupadosPorProducto); */
    

?>