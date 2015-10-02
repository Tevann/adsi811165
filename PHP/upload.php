<?php
if ($_FILES){

      if((($_FILES["foto"]["type"] == "image/png")
      || ($_FILES["foto"]["type"] == "image/jpeg"))
      && ($_FILES["foto"]["size"] < 80000)) {

        if($_FILES["foto"]["error"] > 0) {
            echo "Erro: ".$_FILES["foto"]["error"]."<br>";
          }
      else {

        if(file_exists("subir/".$_FILES["foto"]["name"])) {
          echo $_FILES["foto"]["name"]."El archivo ya existe.";
        }
        else {
          move_uploaded_file($_FILES["foto"]["tmp_name"],
          "subir/".$_FILES["foto"]["name"]);
          echo "Archivo almacenado en: subir/".$_FILES["foto"]["name"];
        }
      }
    }
      else {
        echo "Archivo Invalido:";
      }
}

  ?>
