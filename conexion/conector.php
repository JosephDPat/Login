<?php
		function conectar(){
		if (!($link=mysqli_connect("localhost","root","", "bd_login"))) {
			echo "Error al conectarse al servidor";
			exit();
		}

		if (!mysqli_select_db($link,"bd_login")) {
			echo "Error al seleccionar la base de datos";
			exit();
		}

		return $link;
	}
	
?>
