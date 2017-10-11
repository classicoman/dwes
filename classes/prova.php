<?php
require_once "Persona.php";


$home = new Persona("Tomeu", 25, "43000123Z");

################
###   (1) BASIC
###############

//echo $toni->getDni();
//echo "En " . $toni->getName() . " te " . $toni->getAge() . " anys";

echo "<p>". $home->describe_Person() . "</p>";


##################
### () HERENCIA
##################
require_once "Fill.php";

$nen = new Fill("Pedrito", 8, "No tiene");

echo "<p>". $nen->describe_Person() . "</p>";

?>
