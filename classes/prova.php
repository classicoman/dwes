<?php
require "Persona.php";


$toni = new Persona("Tomeu", 25, "43000123Z");


//echo $toni->getDni();
//echo "En " . $toni->getName() . " te " . $toni->getAge() . " anys";

echo $toni->describe_Person();


?>
