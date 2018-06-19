<?php

$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];

if(empty($nombre) || empty($apellido)){
  echo "Porfavor ingrese nombre y apellido";


}else{
  echo "Gracias " . $nombre . " " . $apellido . " !";
}

 ?>
