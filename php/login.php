<?php
function ini_sesion ($user, $pass)
{
	session_start();

	$con = conectar();
	$usuario = $user;
	$password = sha1($pass);
	$sql="SELECT * from usuarios where nombre= '$usuario' and contrasena = '$password'";
	$result = mysqli_query($con,$sql);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['user']=$usuario;
		header("location:paginas/inicio.php");
	}
	else
	{
		return FALSE; 
	}

}
?>