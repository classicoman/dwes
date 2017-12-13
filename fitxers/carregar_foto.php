
/*
PER TAL DE CARREGAR FITXERS AL SERVIDOR, COM PER EXEMPLE, FOTOS,
HEM D'EMPRAR AQUEST CODI
*/

//1) El form ha de tenir aquest paràmetre
<form enctype="multipart/form-data"  >   ... </form>

//2) Hem de crear un camp de tipus file

Foto a cargar en el servidor: <input type='file' name='imatge'/>


//3) El fitxer que processa el formulari i que hem especificat
//en el camp "action" ha de realitzar la captura del fitxer i l'ha
//de guardar al directori corresponent

<?php

//$_FILES conté tota la info que necessitam per carregar la imatge
if (!empty($_FILES['imatge']['name'])) {

      //Nom del fitxer
      $info = pathinfo($_FILES['imatge']['name']);
      //Extensio del fitxer
      $ext = $info['extension'];

      //Composo el nom i extensio del fitxer en la variable $newname
      $newname = $name.".".$ext;  //

      //Aquest és el directori del meu servidor on vull guardar les imatges
      $directori = 'imatges/imatges/'

      //$target conté la ruta on guardar el nou fitxer
      $target = $directori.$newname;

      //$_FILES['imatge']['tmp_name'] conté la direcció temporal on
      //està guardat el fitxer d'imatge abans de guardar-lo amb el
      //seu nom definitiu

      //Ara, creo la imatge en la seva ruta definitiva, indicada per $target
      if (move_uploaded_file( $_FILES['imatge']['tmp_name'], $target))
         echo "S'ha creat la imatge";
      else {
         echo "Hi ha hagut algun problema i no s'ha creat la imatge";
      }
}

?>
