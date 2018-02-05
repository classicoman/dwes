
<!DOCTYPE html>
<html>
<head>
<script>
  function mostra_amb_ajax() {
          //Agafo el valor de la casella d'input
          var nom = document.getElementById("casilla").value;
          /* Una XML HTTP Request permet executar codi en el servidor
          * sense recarregar la pàgina web. És el que es coneix com a "AJAX" */
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("zona_ajax").innerHTML = this.responseText;
              }
          }
          //Paso la variable   nom   com a paràmetre del fitxer  texto2.php
          xmlhttp.open("GET", "texto2.php?nom="+nom, true);
          xmlhttp.send();
  }
</script>
</head>
<body>
  <p>Al pulsar el botó, saluda a la persona el nom de la qual haguem escrit</p>
  Nom: <input type="text"   id="casilla">
  <input type="button" value="Pulsar" onclick="mostra_amb_ajax()">
  <br>
  <br>
  <div id="zona_ajax">
    <i>El resultat de AJAX es mostrarà aquí</i>
  </div>
  <body>
</html>
