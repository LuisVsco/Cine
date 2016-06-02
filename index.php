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
                    <small>Catalogo de peliculas</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
       <?php 
       while($row=$conect->getArray($consulta)){
       	?>
       	      <div class="col-md-6 portfolio-item">
                <a href="detalle.php?idpelicula=<?php echo $row['id']; ?>">
                    <img class="img-responsive" src="<?php echo $row['ruta']; ?>" alt="">
                </a>
                <h3>
                    <a href="detalle.php?idpelicula=<?php echo $row['id']; ?>"><?php echo $row['Titulo']; ?></a>
                </h3>
                <p><?php echo $row['Resenia']; ?></p>
            </div>
       	<?php
       }
       ?> 	

           
        </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
