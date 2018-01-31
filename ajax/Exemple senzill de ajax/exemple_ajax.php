
<!DOCTYPE html>
<html>
<head>
<script>
  function mostra_amb_ajax(str) {
          //Código Ajax
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("zona_ajax").innerHTML = this.responseText;
              }
          }
          xmlhttp.open("GET", "texto.php", true);
          xmlhttp.send();
  }
</script>
</head>
<body>
  <p>En espitjar el boto, mostra el contingut del fitxer <i>texto.php</i></p>

  <input type="button" value="Pulsar" onclick="mostra_amb_ajax()">
  <div id="zona_ajax">
      El text es mostrarà aqui!
  </div>
  <body>
</html>
