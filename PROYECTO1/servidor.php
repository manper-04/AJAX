<?php

  $con = mysqli_connect("localhost","root","","clientesdb");

  $nombre = $_GET["nombre"];

  if(!empty($nombre)){
    $cliente = mysqli_real_escape_string($con,$nombre);
    $resultado = mysqli_query($con,"select * from tusuarios where usuario like '%".$cliente."%'");

    while($fila = mysqli_fetch_assoc($resultado)){
      echo '<div class="miClase" onclick="toggleOverlay(this)">' . $fila["usuario"] . "</div> ";
      echo '<input type="hidden" value = "'.$fila["correo"].'">';

    }

    mysqli_close($con);

  }else{
    mostrarUsuarios();
  }

function mostrarUsuarios(){

  $con = mysqli_connect("localhost","root","","clientesdb");

  $resultado = mysqli_query($con,"select * from tusuarios");
  while($fila = mysqli_fetch_assoc($resultado)){
    echo '<div class="miClase" onclick="toggleOverlay(this)>' . $fila["usuario"] . "</div> ";
    echo '<input type="hidden" value = "'.$fila["correo"].'">';

  }

  mysqli_close($con);

}




 ?>
