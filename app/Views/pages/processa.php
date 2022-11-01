<?php
	session_start();
	
	include_once('conexao.php');

	$nome = filter_input(INPUT_POST ,'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST ,'email', FILTER_SANITIZE_EMAIL);

	//echo "Nome: $nome <br>";
	//echo "Email: $email <br>";

	$result_usuario = "Insert into login (username,pass) VALUES ('$nome','$email')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	if (mysqli_insert_id ($conn)){
		$_SESSION['msg'] ="Usuario Cadastrado com Sucesso";
		header("location: pagina.php");
	}else {
		$_SESSION['msg'] ="Usuario Nao Cadastrado";
		header("location: pagina.php");
	}
?>