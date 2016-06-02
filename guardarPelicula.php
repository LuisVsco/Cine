<?php 
require_once 'classConexion.php';
$conect = new classConexion; 
$titulo=$_POST['titulo'];
$anio=$_POST['anio'];
$genero=$_POST['genero'];
$clasificacion=$_POST['clasificacion'];
$director=$_POST['director'];
$duracion=$_POST['duracion'];
$resenia=$_POST['resenia'];
$nombreImagen=$_FILES['imagen']['name'];
$destino="imagenes/".$nombreImagen;

if(move_uploaded_file($_FILES['imagen']['tmp_name'], $destino)){
	$sql="INSERT INTO imagen_pelicula (nombre,ruta) VALUES('$nombreImagen','$destino')";
	$id_imagen=$conect->ejecutarConsulta($sql);	
	$sql="INSERT INTO peliculas (Titulo,Anio,Genero,Clasificacion,Director,Duracion,Resenia,idImagen)
	VALUES('$titulo','$anio','$genero','$clasificacion','$director','$duracion','$resenia','$id_imagen')";
	$conect->ejecutarConsulta($sql);	
}


header("location: index.php");
?>
