<!--  versió 3:
		Millores respecte de la versio anterior:
			- Empra la variable $que_mostrar per determinar què me toca mostrar,
			  si els resultats o el formulari
		  - Empra la variable $nom_buid per l'usuari ha deixat aquest camp en blanc.
			- Nom es un camp obligatoris. Si l'usuari no l'ha omplert, se tornar
			  a mostrar el formulari amb un asterisc al costat
-->
<?php
	//inicialitzo variables
	$nom = "";
	$que_mostrar = "";
	$nom_buid = false;

	// Si ha estat processat el formulari...
	if ( isset ( $_POST['submit'] ) ) {

		  if ( isset ( $_POST["nom"] ) )
			    $nom = $_POST["nom"];

			//Si el camp de nom esta buid, he de tornar a mostrar el Form amb un **
			if ($nom == "") {
	 			 	$nom_buid = true;
	         $que_mostrar = "formulari";
			}
		   else
			     $que_mostrar = "resultats";
	} else {
		   // En aquest cas, he de mostrar el Form
		   $que_mostrar = "formulari";
	}
?>

<html>
<body>

<?php   if ( $que_mostrar == "resultats" )  {  ?>

	<p> Bon dia, <?php echo $nom; ?> </p>

<?php  } else {   ?>

	<form action="form_versio3.php" method="post">
	Nom   <?php if ($nom_buid) echo "**";   ?>: <input type="text" name="nom"><br>
	   <input type="submit" name="submit" value="Enviar">
	</form>

<?php } ?>

</body>
</html>
