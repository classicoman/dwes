<?php
echo "
<html>
<body>
";
//Si ha estat processat el formulari, mostro els resultats
if (isset( $_POST['submit'] ) ) {

   echo "<p> Bon dia, " . $_POST["nom"] . "</p>
         <p> La teva direccio de correu es: " . $_POST["email"] . "</p>";

} else {

  echo "
          <form action=\"form_versio1_php_pur.php\" method=\"post\">
  Nom :   <input type=\"text\"   name=\"nom\"><br>
  E-mail: <input type=\"text\"   name=\"email\"><br>
          <input type=\"submit\" name=\"submit\" value=\"Enviar\">
  </form>
  ";
}

echo "
</body>
</html>
";