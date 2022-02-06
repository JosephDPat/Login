<?php

	function select_title ($id)
	{
		$con = conectar();
		$sql = "SELECT * FROM noticia WHERE id = ".$id;
		$query = mysqli_query($con, $sql);
		return mysqli_fetch_array($query);
	}

	function select_all_titles ()
	{
		$con = conectar();
		$sql = "SELECT id, titulo, publicacion FROM noticia";
		$query = mysqli_query($con, $sql);
		return $query;
	}
	
	function insert_noticia($titulo, $contenido, $autor, $fecha, $imagen)
	{
		$con = conectar();
		$sql = "INSERT INTO noticia(titulo, contenido,autor, publicacion, imagen) VALUES (".$titulo.",".$contenido.", ".$autor.",".$fecha.",".$imagen.")";
		echo $sql;
		$query = mysqli_query($con, $sql);
	}
?>