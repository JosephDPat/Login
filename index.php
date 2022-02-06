<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<?php include_once "materiales.php"; ?>
	<link rel="stylesheet" href="css/estilos.css">
	<title>Iniciar sesión</title>
</head>

<body>
	<form method="post">


		<!-- <body style="background-image: url(imagenes/fondo.jpg);"> -->
		<div class="container">
			<br><br>
			<div class="row">
				<div class="col-md-2 col-lg-3"></div>
				<div class="col-12 col-md-8 col-lg-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Iniciar Sesión</h5>
							<h6 class="card-subtitle mb-2 text-muted">Por favor ingrese sus datos</h6><br>
							<input type="text" class="form-control" id="floatingInputValue" placeholder="Usuario" name="ini_user"><br>
							<input type="password" class="form-control" id="floatingInputValue" placeholder="Contraseña" name="ini_pass"><br>
							<button type="submit" name="login" class="btn btn-primary">
								Iniciar sesión
							</button>
							<?php
							if (isset($_REQUEST["login"]) && !empty(isset($_POST["ini_user"])) && !empty(isset($_POST["ini_pass"]))) {
								$user = $_POST["ini_user"];
								$pass = $_POST["ini_pass"];
								if (ini_sesion($user, $pass) == FALSE) {
									echo error("Credenciales no validas");
								}
							}
							?>
							<a href="paginas/edit_contrasena.php" class="btn btn-link">Olvide mi contraseña</a>

							<button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								Crear cuenta
							</button>

							<!-- Modal -->
							<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Crear cuenta</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="container-fluid">
												<div class="row">
													<div class="col">
														<h4 class="text-muted">Bienvenido</h4><br>
														<input type="text" class="form-control" id="floatingInputValue" placeholder="Usuario" name="new_user"><br>
														<input type="password" class="form-control" id="floatingInputValue" placeholder="Contraseña" name="new_pass1"><br>
														<input type="password" class="form-control" id="floatingInputValue" placeholder="Contraseña" name="new_pass2"><br>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
											<button type="submit" class="btn btn-primary" name="crear">Crear cuenta</button>
											<?php
											if (isset($_REQUEST["crear"])) {
												if (!empty($_POST["new_user"]) && !empty($_POST["new_pass1"]) && !empty($_POST["new_pass2"])) {
													$user = $_POST["new_user"];
													$pass1 = $_POST["new_pass1"];
													$pass2 = $_POST["new_pass2"];

													if (exist_user($user) == 0) {
														if ($pass1 == $pass2) {
															$resp = create_user($user, $pass1);
															if ($resp == 1) {
																success("Cuenta creada");
															} else if ($resp == 2) {
																error("Error al crear la cuenta");
															}
														} else {
															error("Las contraseñas no concuerdan");
														}
													} else {
														error("Usuario ya existente");
													}
												} else {
													error("Complete los campos");
												}
											}
											?>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Button trigger modal -->
					<!--  -->
				</div>
				<div class="col-md-2 col-lg-3"></div>
			</div>
		</div>
	</form>
</body>

</html>