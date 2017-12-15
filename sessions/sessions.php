<?php
//Sessions
session_start();

$_SESSION['usuario'] = 'Pepe';

/*
  --- SOLUCION 1 ---

$_SESSION['carrito'] =
    array("tomates", "patatas","manzanas");

$_SESSION['tomates'] = 2;
$_SESSION['patatas'] = 5;
$_SESSION['manzanas'] = 10;
*/

$_SESSION['carrito'] =
    array(
       "tomates"  => 2  ,
       "patatas"  => 5  ,
       "manzanas" => 10
);

//Para recorrer un array asociativo,
//necesito:   "foreach"

foreach($_SESSION['carrito'] as $producto => $uds) {
    echo "$uds $producto<br>";
}



//var_dump($_SESSION);


//echo $_SESSION['carrito'];

?>
