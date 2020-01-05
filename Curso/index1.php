<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT email, senhadeusuario FROM usuarios WHERE email = '$usuario'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while($array = mysqli_fetch_array($buscar)){
	
	$senhadeusuario = $array['senhadeusuario'];

	$senhadecodificada = sha1($senha);

	if($total > 0){
		if($senhadecodificada == $senhadeusuario){
			header('Location: menu.php');
		}
		else{
			header('Location: erroSenha.php');	
		}

	}
	else {
		header('Location: erroLogin.php');
	}

}

?>