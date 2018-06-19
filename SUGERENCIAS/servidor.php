<?php

$personas = array("Manuel","Pedro","Mario","Pablo","Blon","Bertha","Alameda","Jose",
      "Juan","Javier","Joserra","Pedrito","Ramon","Rata","Lopez");


$nombre = $_GET["nombre"];

$sugerencia = "";

if($nombre !== ""){

  $nombre = strtolower($nombre);
  $cantidadCaracteres = strlen($nombre);

  foreach($personas as $persona ){
    $nombreServidor = substr($persona, 0 , $cantidadCaracteres);

    if(stristr($nombre, $nombreServidor) !== false){
      if($sugerencia === ""){
        $sugerencia = $persona;

      }else{

        $sugerencia .= " , $persona";

      }

    }


  }

}

echo $sugerencia === "" ? "No fue encontrado" : $sugerencia;




 ?>
