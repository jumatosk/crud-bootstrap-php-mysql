<?php

include 'conexao.php';

$nomecategoria = $_POST['nomecategoria'];

$sql = "INSERT INTO categoria (nomecategoria) VALUES ('$nomecategoria')";

$inserir =  mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px">
	<center>
		<h3>Produto adicionado com sucesso!</h3>
		<div style="margin-top: 10px">
			<a href="menu.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Início</a>
			<a href="cadastrarCategoria.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Cadastrar categoria</a>
		</div>
	</center>
</div>