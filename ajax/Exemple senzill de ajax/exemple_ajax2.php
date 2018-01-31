
<!DOCTYPE html>
<html>
<head>
<script>
  function mostra_amb_ajax() {
          var nom = document.getElementById("casilla").value;
          //Código Ajax
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("zona_ajax").innerHTML = this.responseText;
              }
          }
          xmlhttp.open("GET", "texto2.php?nom="+nom, true);
          xmlhttp.send();
  }
</script>
</head>
<body>
  <p>Al pulsar el boton, saluda a la persona cuyo nombre pongamos en la casilla</p>

  <input type="button" value="Pulsar" onclick="mostra_amb_ajax()">
  <input type="text"   id="casilla">
  <div id="zona_ajax">
      El text es mostrarà aqui!
  </div>
  <body>
</html>
