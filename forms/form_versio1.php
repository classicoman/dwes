<!--  versió 1:  SENZILLA -->
<html>
<body>
<?php
//Si ha estat processat el formulari, mostro els resultats
if (isset( $_POST['submit'] ) ) {
?>

  <p> Bon dia, <?php echo $_POST["nom"]; ?> </p>
  <p> La teva direccio de correu es: <?php echo $_POST["email"]; ?> </p>

<?php  } else { ?>

  <form action="form_versio1.php" method="post">
  Nom :   <input type="text"   name="nom"><br>
  E-mail: <input type="text"   name="email"><br>
          <input type="submit" name="submit" value="Enviar">
  </form>

<?php } ?>

</body>
</html>
