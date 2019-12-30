<?php

include 'conexao.php';

$nomecategoria = $_POST['nomecategoria'];

$sql = "INSERT INTO categoria (nomecategoria) VALUES ('$nomecategoria')";

$inserir =  mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px";>
<center>
	<h4>Produto adicionado com sucesso!</h4>
</center>
<div style="padding-top: 30px">
	<center>
		<a href="menu.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Cadastrar novo item</a>
		<a href="listarProdutos.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Listar produtos</a>
	</center>
</div>
</div>