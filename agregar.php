<?php 
require_once 'classConexion.php';
$conect = new classConexion; 
$sql="SELECT p.id,p.Titulo,p.Anio,p.Clasificacion,p.Genero,p.Director,p.Duracion,p.Resenia,i.ruta
	FROM peliculas AS p JOIN imagen_pelicula AS i 
	ON (i.idImagen=p.idImagen)";
$consulta=$conect->consultar($sql);

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
                    <small>Agregar peliculas</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
      <div align="center">
<form enctype="multipart/form-data"  class="form-horizontal" action="guardarPelicula.php" method="post">
	<table>
		<tr>
			<th>Titulo:</th>
			<td><input type="text" id="titulo" name="titulo" required="" autocomplete="off"  placeholder="Titulo"/></td>
		</tr>
		<tr>
			<th>Año</th>
			<td><input type="text" id="anio" name="anio" required="" autocomplete="off"  placeholder="Año"/></td>
		</tr>
		<tr>
			<th>Genero:</th>
			<td><input type="text" id="genero" name="genero" required="" autocomplete="off"  placeholder="Genero"/></td>
		</tr>
		<tr>
			<th>Clasificacion:</th>
			<td><input type="text" id="clasificacion" name="clasificacion" required="" autocomplete="off"  placeholder="Clasificacion"/></td>
		</tr>
		<tr>
			<th>Director:</th>
			<td><input type="text" id="director" name="director" required="" autocomplete="off"  placeholder="Director"/></td>
		</tr>
		<tr>
			<th>Duracion:</th>
			<td><input type="text" id="duracion" name="duracion" required="" autocomplete="off"  placeholder="Duracion"/></td>
		</tr>
		<tr>
			<th>Reseña:</th>
			<td><input type="text" id="resenia" name="resenia" required="" autocomplete="off"  placeholder="Reseña"/></td>
		</tr>
		<tr>
			<th>Imagen:</th>
			<td><input type="file" id="imagen" name="imagen" required="" value="Selecciona Imagen" /></td>
		</tr>
		<tr align="center">
			<td colspan="2" align="center"><input type="submit" class="btn btn-success" id="guardar" name="guardar" value="Guardar" /></td>
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