<?php 
require_once 'classConexion.php';
$conect = new classConexion; 
$idpelicula=$_GET['idpelicula'];
$sql="DELETE FROM peliculas WHERE id='$idpelicula'";
$conect->ejecutarConsulta($sql);
header("location: index.php");
?>
