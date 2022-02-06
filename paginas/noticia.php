<?php
	session_start();
	if (isset($_SESSION['user'])) {
		//select_title();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php
	require_once "materiales.php";
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		$article = select_title($id);
	}

	?>
	 <title><?php echo $article["titulo"]; ?></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-lg-1"></div>
			<div class="col-12 col-md-10 col-lg-10">
				<div class="card">
					<p id="title_ini">MyBlog</p>
						<div class="card-body">
						<p class="float-end"><?php echo $article["publicacion"]; ?></p>
						<h5 class="card-title"><?php echo $article["titulo"]; ?></h5><br>
						<p class="card-text">
							<?php echo $article["contenido"]; ?>
						</p>
						<a href="../php/salir.php" class="btn btn-primary">Cerrar sessión</a>
						<a href="../paginas/inicio.php" class="btn btn-primary" >Regresar</a>
						</div>

				</div>

			</div>
			<div class="col-md-1 col-lg-1"></div>
				
			</div>
		</div>
	</div>
</body>
</html>
<?php
	}
	else
	{
		header("location:../index.php");
	}
?>