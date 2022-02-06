<?php
	function create_user ($user, $pass)
	{
		$con = conectar();
		$sql = "INSERT INTO `usuarios`(`nombre`, `contrasena`) VALUES ('".$user."','".sha1($pass)."')";
			

		if (exist_user($user) == FALSE) {
			$query = mysqli_query($con, $sql);
			
			if ($query) {
				return 1;//funciono
			}
			else
			{
				return 2;//no funciono
			}
		}
		else
		{
			return 0;//usuario ya existente
		}
	}

	function exist_user ($user)
	{
		$con = conectar();
		$sql = "SELECT id, nombre FROM usuarios WHERE nombre = '".$user."'";
		$query = mysqli_query($con, $sql);

		if (mysqli_num_rows($query) > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function update_user ($user, $pass)
	{
		if (exist_user($user) == TRUE) {//existe.. procede
			$con = conectar();
			$sql = "UPDATE usuarios SET contrasena = '".sha1($pass)."' WHERE nombre = '".$user."'";

			if ($query = mysqli_query($con, $sql) != FALSE) {
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}
?>