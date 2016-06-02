<?php 
require_once 'classConexion.php';
$conect = new classConexion; 
$sql="SELECT p.Titulo,p.Anio,p.Clasificacion,p.Genero,p.Director,p.Duracion,p.Resenia,i.ruta
	FROM peliculas AS p JOIN imagen_pelicula AS i 
	ON (i.idImagen=p.idImagen)";
$consulta=$conect->consultar($sql);
?>
<div align="center">
	<a href="index.php">REGRESAR</a>
<table border="1" cellpadding="0" cellspacing="0">
	<tr align="center">
		<th>#</th>
		<th>TITULO</th>
		<th>AÑO</th>
		<th>GENERO</th>
		<th>CLASIFICACION</th>
		<th>DIRECTOR</th>
		<th>DURACION</th>
		<th>RESEÑA</th>
		<th>IMAGEN</th>
	</tr>
	<?php 
	$contador=1;
	while ($row=$conect->getArray($consulta)) {
		 ?>
		 <tr align="center">
		 	<td> <?php echo $contador; ?></td>
		 	<td><?php echo $row['Titulo']; ?></td>
		 	<td><?php echo $row['Anio']; ?></td>
		 	<td><?php echo $row['Genero']; ?></td>
		 	<td><?php echo $row['Clasificacion']; ?></td>
		 	<td><?php echo $row['Director']; ?></td>
		 	<td><?php echo $row['Duracion']; ?></td>
		 	<td><?php echo $row['Resenia']; ?></td>
		 	<td><img width="75" height="150" src="<?php echo $row['ruta']; ?>"  /></td>
		 </tr>
		 <?php
		 $contador++;
	}
	?>
</table>
</div>