<?php
require_once("Persona.php");

class Fill extends Persona
{
	//mètode que "overrides" el mètode del mateix nom en la classe Persona
	function describe_Person() {
    return $this->getName()." te " .$this->getAge() . " anys";
  }
}
?>
