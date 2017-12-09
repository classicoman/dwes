<?php
require_once "Persona.php";


$home = new Persona("Tomeu", 25, "43000123Z");

################
###   (1) BASIC
###############

echo $home->getDni() . "<br>";
echo "En " . $home->getName() . " te " . $home->getAge() . " anys" . "<br>";
echo "<p>". $home->describe_Person() . "</p>";


##################
### () HERENCIA
##################
require_once "Fill.php";

$nen = new Fill("Pedrito", 8, "No tiene");

echo "<p>". $nen->describe_Person() . "</p>";

?>
