<?php

$con = mysqli_connect("localhost","root","","clientesdb");

$usuario = $_GET["usuario"];
$usuario = (int)$usuario;

$resultado = mysqli_query($con,"select * from tusuarios where id = $usuario");



$usuariosdb = "";

$usuariosdb .= "<table>";
$usuariosdb .= "<tr>";
$usuariosdb .= "<th>Nombre</th>";
$usuariosdb .= "<th>Correo</th>";
$usuariosdb .= "</tr>";


while($fila = mysqli_fetch_assoc($resultado))
{
    $usuariosdb .= "<tr>";
    $usuariosdb .= "<td>" . $fila["nombre"] . "</td>";
    $usuariosdb .= "<td>" . $fila["correo"] . "</td>";
    $usuariosdb .= "</tr>";
}

$usuariosdb .= "</table>";

echo $usuariosdb;

mysqli_close($con);

 ?>
