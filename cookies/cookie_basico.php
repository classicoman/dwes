<?php
//Crear, leer i eliminar cookies

//Creadas a las 17.47 horas
/*
setcookie('color_favorito','azul',time()+60*2);
setcookie('nombre','Toni',time()+60*5);
setcookie('fondo_pantalla','rio y montañas',time()+60*60);
*/

//LEER LAS COOKIES.

if (isset( $_COOKIE['color_favorito'] ))
echo "Mi color favorito es = ". $_COOKIE['color_favorito'];
else {
  echo "La Cookie \$_COOKIE['color_favorito'] no existe <br>";
}


if (isset( $_COOKIE['nombre'] ))
echo "Mi nombre es = ". $_COOKIE['nombre'];
else {
  echo "La Cookie \$_COOKIE['nombre'] no existe";
}

?>
