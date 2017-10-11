<!--  versió 2:
		Fa el mateix que la versió 1, però introdueix dues millores:
		 	- Empro la funció isset() per comprovar si l'usuari ha omplit
				els camps
			- Passo el contingut dels paràmetres a variables
-->
<?php
	//inicialitzar les variables
	$nom = $email = "";

	if ( isset ( $_POST["nom"] ) )
		$nom = $_POST["nom"];
	if ( isset ( $_POST["email"] ) )
		$email = $_POST["email"];
?>

<html>
<body>

	<?php
	//Si ha estat processat el formulari, mostro els resultats
	if (isset( $_POST['submit'] ) ) {
	?>

	  <p> Bon dia, <?php echo $nom; ?> </p>
	  <p> La teva direccio de correu es: <?php echo $email; ?> </p>

	<?php  } else { ?>

	  <form action="form_versio1.php" method="post">
	  Nom :   <input type="text"   name="nom"><br>
	  E-mail: <input type="text"   name="email"><br>
	          <input type="submit" name="submit" value="Enviar">
	  </form>

	<?php } ?>

</body>
</html>
