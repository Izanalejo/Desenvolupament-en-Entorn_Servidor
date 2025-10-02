<?php
/*
Modificaciones:
    Crea para cada menu una categoria, categorias posibles: "Mediterraneo", "Vegetariano".
    Crea 6 menus de diferentes categorias
    IMPRIME
    Todos los menus
    A todos los menus agrupados por categoria
    Solo los menus que tengande bebida "Agua"
    Añade los precios a los menus
    Lista los menus descentemente por precio 


*/
$menu1 = [
    "Plato1" => "Macarrones con queso",
    "Plato2" => "Pescado asado", 
    "Bebida" => "Coca-Cola", 
    "Postre" => "Helado de vainilla",
    "Categoria"=> "Mediterraneo",
    "Precio" => 15
]; 
$menu2 = [
    "Plato1" => "Sopa de vegetales", 
    "Plato2" => "Hamburguesa veggy con patatas", 
    "Bebida" => "Agua", 
    "Postre" => "Arroz con leche",
    "Categoria"=> "Vegetariano",
    "Precio" => 18
];
$menu3 = [
    "Plato1" => "Ensalada de queso de cabra",
    "Plato2" => "Pollo a la plancha", 
    "Bebida" => "Nestea", 
    "Postre" => "Coulant",
    "Categoria"=> "Mediterraneo",
    "Precio" => 15
];
$menu4 = [
    "Plato1" => "Tofu", 
    "Plato2" => "Garbanzos", 
    "Bebida" => "Agua", 
    "Postre" => "Yogur natural",
    "Categoria"=> "Vegetariano",
    "Precio" => 20
];
$menu5 = [
    "Plato1" => "",
    "Plato2" => "Pescado asado", 
    "Bebida" => "Fanta", 
    "Postre" => "Tarta de queso",
    "Categoria"=> "Mediterraneo",
    "Precio" => 12
];
$menu6 = [
    "Plato1" => "Gazpacho", 
    "Plato2" => "Judias verdes", 
    "Bebida" => "Agua", 
    "Postre" => "Tarta de limón",
    "Categoria"=> "Vegetariano",
    "Precio" => 13
];

$menus = [$menu1, $menu2, $menu3, $menu4, $menu5, $menu6]; // creamos un array a partir de arrays asociativos
$menuMediterraneo = [$menu1, $menu3, $menu5];
$menuVegetariano = [$menu2, $menu4, $menu6];
$menusAgua = [$menu2, $menu4, $menu6];


//Impresión de todos los menús
foreach ($menus as $menudeldia) {
  echo "<br>Menú del día<br/>";
  echo "<br/>";

  foreach ($menudeldia as $platos => $comida) {
    echo "$platos: $comida <br/>";
  }
}

 // Impresion de menús Mediterraneos
echo "<br><br>Menús Mediterraneos<br/>";
foreach ($menuMediterraneo as $typeMenu1) {
    echo "<br/>";

    foreach ($typeMenu1 as $platos => $comida) {
    echo "$platos: $comida <br/>";
  }
}
 // Impresión de menús Vegetarianos

echo "<br><br>Menús Vegetarianos<br/>";
foreach ($menuVegetariano as $typeMenu2) {
    
    echo "<br/>";

    foreach ($typeMenu2 as $platos => $comida) {
    echo "$platos: $comida <br/>";
  }
}

 // Impresión de menús con agua

echo "<br><br>Menús Con Agua<br/>";
foreach ($menusAgua as $typeMenu3) {
    
    echo "<br/>";

    foreach ($typeMenu3 as $platos => $comida) {
    echo "$platos: $comida <br/>";
  }
}


// Para acceder a un elemento concreto se anidan los corchetes
$postre0 = $menus[0]["Postre"];


?>
