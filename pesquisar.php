<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "teste3";

	

	$link = mysqli_connect($host, $user, $pass,$db);
	
	$pesquisar = $_POST['pesquisar'];
	$resultado = "SELECT * FROM livros WHERE nome LIKE '%$pesquisar%'";
	$resultado_livros = mysqli_query($link, $resultado);
	
	while($rows_livros = mysqli_fetch_array($resultado_livros)) {
		echo "Nome do livro: $row_livros".$rows_livros['nome']."<br>";
	}

	




	
?>
