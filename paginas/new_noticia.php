<!DOCTYPE html>
<html>
<?php require_once "materiales.php"; ?>
<link rel="stylesheet" href="../css/estilos.css">
<?php
include_once "../conexion/conector.php" ;
if($_POST['titulo']){
$con = conectar();
$sql = "INSERT INTO noticia(titulo, contenido,autor, publicacion, imagen) VALUES ('".$_POST['titulo']."','".$_POST['contenido']."', '".$_POST['autor']."','".$_POST['fecha']."','')";
$query = mysqli_query($con, $sql);
}
?>

<head>
	<title>Nueva Noticia</title>
</head>

<body>
	<form method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-1"></div>
				<div class="col-12 col-md-10 col-lg-10">

					<div class="card">
						<p id="title_ini">BlogATI</p>
						<div class="card-body">
							<!-- <h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 -->
							<h1 class="text-center">Publica tu noticia</h1>
							<input type="text" class="form-control" id="floatingInputValue" placeholder="Autor" name="autor" required><br>
							<input type="text" class="form-control" id="floatingInputValue" placeholder="Titulo" name="titulo" required><br>
							<label>Subir imagen</label>
							<input class="form-control" type="file" id="formFile" name="imagen" accept="image/png, image/jpeg" required><br>
							<input type="date" class="form-control" id="floatingInputValue" placeholder="Fecha" name="fecha" required><br>
							<div class="form-floating">
								<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="contenido" required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sequi hic quidem, sunt eos nemo rerum vel voluptatum ducimus veritatis! Excepturi perspiciatis, assumenda, quod quaerat maxime suscipit aperiam ipsum nobis illum quibusdam provident vitae dolor quasi culpa necessitatibus doloremque voluptatibus repellat similique beatae dolores architecto quas voluptates aut. Reiciendis nobis consectetur expedita iste nostrum fuga sit cumque distinctio reprehenderit hic?</textarea>
								<label for="floatingTextarea">Publicación</label>
							</div>

							<button type="submit" name="envionoticia" class="btn btn-primary" onclick="">
								Enviar
							</button>
							<a href="../paginas/inicio.php" class="btn btn-primary">Regresar</a>
							<?php
							//if (isset($_POST["titulo"]) && isset($_POST["fecha"]) && isset($_POST["contenido"]) && !empty(isset($_FILES["imagen"])["tmp_name"])) {
							//success("");
							//}
							if (!empty($_FILES["imagen"]["tmp_name"])) {
								$img = $_FILES["imagen"]["tmp_name"];
								//echo "<img src='".$img."'>";
							}



							?>
							<img src="">
						</div>
					</div>
				</div>
				<div class="col-md-1 col-lg-1"></div>
			</div>
		</div>
	</form>
</body>

</html>