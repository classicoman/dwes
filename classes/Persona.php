<?php
class Persona
{
	public $name = "";
  public $age = 0;
  private $dni = "";

	function __construct($nom, $edat, $dni) {
    $this->name = $nom;
    $this->age = $edat;
    $this->dni = $dni;
  }

  function getDni() {
      return $this->dni;
  }

  //Obtenir nom
	function getName() {
		return $this->name;
	}

	//Establir nom
	function setName($newName) {
		$this->name = $newName;
	}
  //Obtenir edat
	function getAge() {
		return $this->age;
	}

	//Establir edat
	function setAge($newAge) {
		$this->age = $newAge;
	}

  function describe_Person() {
    return $this->getName().",".$this->getDni().",".$this->getAge();
  }
}
?>
