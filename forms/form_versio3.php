<!--  versió 3:
		Millores respecte de la versio anterior:
			- Empra la variable $que_mostrar per determinar què me toca mostrar,
			  si els resultats o el formulari
		  - Empra les variables $nom_buid i $email_buid per indicar si algun
			  d'aquests camps ha estat deixat en blanc.
			- Nom i Email son camps obligatoris. Si l'usuari no els ha omplert,
			  llavors se torna a mostrar el formulari amb un asterisc al costat
				del camp buid.
-->
<?php
	$nom = $email = "";
	$que_mostrar = "";
	$nom_buid = $email_buid = false;

	// Si ha estat processat el formulari...
	if ( isset ( $_POST['submit'] ) ) {

		  if ( isset ( $_POST["nom"] ) )
			    $nom = $_POST["nom"];
		  if ( isset ( $_POST["email"] ) )
			    $email = $_POST["email"];

					if ($nom == "")
	 			 	  $nom_buid = true;
					if ($email == "")
		 			  $email_buid = true;
		   //Si hi ha algun camp buid, he de mostrar el Form amb els asteriscs
		   if ( $nom_buid || ($email_buid) )
	         $que_mostrar = "formulari";
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
	<p> La teva direccio de correu es: <?php echo $_POST["email"]; ?> </p>

<?php  } else {   ?>

	<form action="form_versio3.php" method="post">
	Nom   <?php if ($nom_buid) echo "**";   ?>: <input type="text" name="nom"><br>
	E-mail<?php if ($email_buid) echo "**"; ?>: <input type="text" name="email"><br>
	   <input type="submit" name="submit" value="Enviar">
	</form>

<?php } ?>

</body>
</html>
