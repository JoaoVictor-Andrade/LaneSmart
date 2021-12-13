<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "lanesmart";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(mysqli_connect_error())
    die("Houve um erro...".mysqli_connect_error);
?>