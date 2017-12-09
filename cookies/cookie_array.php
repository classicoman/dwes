<?php

setcookie("a[1]",1,time()+3600);
setcookie("a[2]",1,time()+3600);
setcookie("a[10]",1,time()+3600);

var_dump($_COOKIE["a"]);

if (isset ($_COOKIE["usuario"] )) {
    foreach ($_COOKIE["usuario"] as $i => $valor)
        echo  "Producto $i: $valor unidades";
};
?>
