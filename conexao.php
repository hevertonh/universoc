<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "candidato";

	//conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if (!$conn){
		die("falha na conexao: ", mysqli_connect_error());
	} else {
		//echo "conexao realizada com sucesso";
	}

?>