<?php

include 'conexao.php';

$codProduto = $_POST['codProduto']; //recebe o valor do atributo
$nomeProduto = $_POST['nomeProduto'];
$qtdProduto = $_POST['qtdProduto'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`(`codigoproduto`, `nomeproduto`, `quantidade`, `categoria`, `fornecedor`) VALUES ($codProduto,'$nomeProduto',$qtdProduto,'$categoria','$fornecedor')";

$inserir =  mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px";>
<center>
	<h4>Produto adicionado com sucesso!</h4>
</center>
<div style="padding-top: 30px">
	<center>
		<a href="index.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Cadastrar novo item</a>
		<a href="listarProdutos.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Listar produtos</a>
	</center>
</div>
</div>