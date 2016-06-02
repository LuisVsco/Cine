<?php 
require_once 'classConexion.php';
$conect = new classConexion; 
$idpelicula=$_POST['idpelicula'];
$titulo=$_POST['titulo'];
$anio=$_POST['anio'];
$genero=$_POST['genero'];
$clasificacion=$_POST['clasificacion'];
$director=$_POST['director'];
$duracion=$_POST['duracion'];
$resenia=$_POST['resenia'];
$nombreImagen=$_FILES['imagen']['name'];
if($nombreImagen!=''){
$destino="imagenes/".$nombreImagen;
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $destino)){
	$sql="INSERT INTO imagen_pelicula (nombre,ruta) VALUES('$nombreImagen','$destino')";
	$id_imagen=$conect->ejecutarConsulta($sql);	
		$sql="UPDATE peliculas SET Titulo='$titulo',Anio='$anio',Genero='$genero',Clasificacion='$clasificacion',Director='$director',Resenia='$resenia',idImagen='$id_imagen'
	WHERE id='$idpelicula'";
	$conect->ejecutarConsulta($sql);	
}	
}
else{
	$sql="UPDATE peliculas SET Titulo='$titulo',Anio='$anio',Genero='$genero',Clasificacion='$clasificacion',Director='$director',Resenia='$resenia'
	WHERE id='$idpelicula'";
	$conect->ejecutarConsulta($sql);
}




header("location: detalle.php?idpelicula=$idpelicula");
?>
