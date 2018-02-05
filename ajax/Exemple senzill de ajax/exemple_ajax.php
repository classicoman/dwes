
<!DOCTYPE html>
<html>
<head>
<script>
  /**
   * Executa AJAX en el servidor
   */
  function mostra_amb_ajax() {
          //Código Ajax
          /* Una XML HTTP Request permet executar codi en el servidor
          * sense recarregar la pàgina web. És el que es coneix com a "AJAX" */
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  //"zona_ajax" és l'identificador de l'etiqueta HTML5 on carregarem
                  //"el resultat de la XML HTTP Request
                  document.getElementById("zona_ajax").innerHTML = this.responseText;
              }
          }
          //"texto.php" conté el codi que s'executarà en el servidor sense
          // necessitat de recarregar la pàgina
          xmlhttp.open("GET", "texto.php", true /*asíncron*/);
          xmlhttp.send();
  }
</script>
</head>
<body>
  <p>En espitjar el boto, mostra el contingut del fitxer <i>texto.php</i></p>
  <input type="button" value="Pulsar" onclick="mostra_amb_ajax()">
  <div id="zona_ajax">
      En executar-se AJAX, aquest text serà substituït pel resultat.
  </div>
  <body>
</html>
