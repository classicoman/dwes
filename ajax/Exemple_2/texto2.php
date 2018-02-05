<?php
if ($_GET['nom']=="")
    echo "No has escrit el teu nom a dins de la casella!";
else
    echo "<h1>Hola, " . $_GET['nom'] . "!</h1>";

 ?>
