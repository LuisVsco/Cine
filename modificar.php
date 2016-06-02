<?php 
require_once 'classConexion.php';
$conect = new classConexion; 
$idpelicula=$_GET['idpelicula'];
$sql="SELECT p.id,p.Titulo,p.Anio,p.Clasificacion,p.Genero,p.Director,p.Duracion,p.Resenia,i.ruta
	FROM peliculas AS p JOIN imagen_pelicula AS i 
	ON (i.idImagen=p.idImagen AND id='$idpelicula')";
$consulta=$conect->consultar($sql);
$row=$conect->getArray($consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CINEMA DE LA LAGUNA</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">CINEMA DE LA LAGUNA</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="agregar.php">AGREGAR PELICULAS</a>
                    </li>
                    <li>
                        <a href="buscar.php">BUSCAR PELICULAS</a>
                    </li>
                    <li>
                        <a href="index.php">MOSTRAR PELICULAS</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Peliculas
                    <small>Catalogo de peliculas</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
      <div align="center">
<form enctype="multipart/form-data" action="guardarModificacion.php" method="post">
	<input type="hidden" id="idpelicula" name="idpelicula" value="<?php echo $idpelicula; ?>" />
<table>
	<tr align="center">
		<th colspan="2"><h1><input type="text" id="titulo" name="titulo" value="<?php echo $row['Titulo']; ?>" /></h1></th>
	</tr>
	<tr>
		<td colspan="2"><img width="50%" height="50%" src="<?php echo $row['ruta']; ?>">
			<input type="file" id="imagen" name="imagen"  value="Selecciona Imagen" />
		</td>
	</tr>
	<tr>
		<td>AÑO:</td>
		<td><input type="text" id="anio" name="anio" value="<?php echo $row['Anio']; ?>" /></td>
	</tr>
	<tr>
		<td>GENERO:</td>
		<td><input type="text" id="genero" name="genero" value="<?php echo $row['Genero']; ?>" /></td>
	</tr>
	<tr>
		<td>CLASIFICACION:</td>
		<td><input type="text" id="clasificacion" name="clasificacion" value="<?php echo $row['Clasificacion']; ?>" /></td>
	</tr>
	<tr>
		<td>DIRECTOR:</td>
		<td><input type="text" id="director" name="director" value="<?php echo $row['Director']; ?>" /></td>
	</tr>
	<tr>
		<td>DURACION:</td>
		<td><input type="text" id="duracion" name="duracion" value="<?php echo $row['Duracion']; ?>" /></td>
	</tr>
	<tr>
		<td>RESEÑA:</td>
		<td><input type="text" id="resenia" name="resenia" value="<?php echo $row['Resenia']; ?>" /></td>
	</tr>
	<tr>
		<td><input type="submit" class="btn btn btn-success" value="GUARDAR" id="guardar" name="guardar" /></td>
		<td><a class="btn btn btn-danger" onclick="if(confirm('¿ESTAS SEGURO DE ELIMINAR ESTA PELICULA?')){return true}else{return false}" href="eliminar.php?idpelicula=<?php echo $idpelicula; ?>">ELIMINAR</a></td>
	</tr>		 	
</table>
</form>
</div>
        </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


