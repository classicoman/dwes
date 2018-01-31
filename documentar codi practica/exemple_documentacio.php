<?php
//Extensió ATOM:  https://atom.io/packages/docblockr
/**
 * Funciones matemáticas
 * @author Toni Amengual <tamengual@fakemail.com>
 */


class matematicas {

/**
 * sumar dos numeros
 * @param  float $a
 * @param  float $b
 * @return float
 */
function sumar($a, $b) {
    $c = $a + $b;
    return $c;
}

/**
 * Mostrar la pantalla bla bla bla..
 */
function view() {
   require_once ("vistas/pantalla.phtml");
}

/**
 * Calcula bla bla bla...
 * @param  integer $a
 * @param  integer $b
 * @return mixed    
 */
function calcula($a, $b) {
   if ($a > $b) {
     return "mayor";
   }
   else {
     return false;
   }
}

}



 ?>
