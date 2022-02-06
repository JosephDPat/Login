<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php require_once "materiales.php" ?>
	<title>Contraseña</title>
</head>
<body>
<form method="post">
	<div class="container"><br><br>
		<div class="row">
			<div class="col-md-2 col-lg-3"></div>
			<div class="col-12 col-md-8 col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Restaurar contraseña</h5><br>
						<!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
						<p class="card-text">
							<input type="text" class="form-control" id="floatingInputValue" placeholder="Usuario" name="user"><br>
							<input type="password" class="form-control" id="floatingInputValue" placeholder="Nueva Contraseña" name="pass1"><br>
							<input type="password" class="form-control" id="floatingInputValue" placeholder="Repita la Contraseña" name="pass2"><br>
						</p>
						<?php
							if (isset($_REQUEST["guardar"]) && isset($_POST["user"]) && !empty(isset($_POST["pass1"])) && !empty(isset($_POST["pass2"])))
							{
								$user = $_POST["user"];
								$pass1 = $_POST["pass1"];
								$pass2 = $_POST["pass2"];
								if (exist_user($user) == TRUE) 
								{
									if ($pass1 == $pass2)
									{
									$resp = update_user($user, $pass1);
										success("Se modifico la contraseña");
									}
									else
									{
										error("Las contraseñas no concuerdan");
									}
								}
								else
								{
									error("Usuario no existente");
								}
								/*
								if ($resp == TRUE) {
									success("Usuario existente");
								}else{
									error("Usuario no existente");
								}
								*/
							}
						?>
						<a href="../index.php" class="btn btn-primary">Iniciar sesión</a>
						<button type="submit" name="guardar" class="btn btn-secondary float-end">Guardar cambios</button>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-lg-3"></div>
		</div>
	</div>
</form>
</body>
</html>