<?php
session_start();
if (isset($_SESSION['user'])) {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<?php require_once "materiales.php" ?>
		<link rel="stylesheet" href="../css/estilos.css">
		<title>Inicio</title>
	</head>

	<body>
		<form method="post" action="">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-lg-1"></div>
					<div class="col-12 col-md-10 col-lg-10">
						<div class="card">
							<p id="title_ini">BlogATI</p>
							<div class="card-body">
								<h5 class="card-title">Tablon de noticias</h5>
								<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
								<!--  -->
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Numero</th>
											<th scope="col">Titulo</th>
											<th scope="col">Fecha</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$resp = select_all_titles();
										foreach ($resp as $key) { ?>
											<tr>
												<th scope="row"><?php echo $key["id"]; ?></th>
												<td><a href="noticia.php?id=<?php echo $key["id"] ?> "> <?php echo $key["titulo"]; ?> </a></td>
												<td><?php echo $key["publicacion"]; ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
								<!--  -->

								<a href="../php/salir.php" class="btn btn-primary">Cerrar sessión</a>

								<a href="../paginas/new_noticia.php" class="btn btn-primary">Nueva noticia</a>
							</div>

						</div>
					</div>
					<div class="col-md-1 col-lg-1">

					</div>

				</div>
			</div>
			</div>
		</form>
	</body>

	</html>
<?php
} else {
	header("location:../index.php");
}
?>