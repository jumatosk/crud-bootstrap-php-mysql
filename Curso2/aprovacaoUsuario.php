<?php

include 'conexao.php';

$id = $_GET['idusuario'];
$nivel = $_GET['niveldeusuario'];

if($nivel == 1){
	$update = "UPDATE usuarios SET status = 'Ativo', niveldeusuario = 1 WHERE idusuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
}

if ($nivel == 2) {
	$update = "UPDATE usuarios SET status = 'Ativo', niveldeusuario = 2 WHERE idusuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
}

if ($nivel == 3) {
	$update = "UPDATE usuarios SET status = 'Ativo', niveldeusuario = 3 WHERE idusuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
}

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
		<h3>Usuário aprovado com sucesso!</h3>
		<div style="margin-top: 10px">
			<a href="menu.php" class="btn btn-sm btn-info">Menu</a>
		</div>