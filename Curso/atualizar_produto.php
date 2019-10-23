<?php

include 'conexao.php';

$id = $_POST['id'];
$nomeProduto = $_POST['nomeProduto'];
$qtdProduto = $_POST['qtdProduto'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeProduto',`quantidade`=$qtdProduto,`categoria`='$categoria',`fornecedor`='$fornecedor' WHERE codigoestoque = $id";

$atualizar = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
		<h3>
			Atualizado com sucesso!
		</h3>
		<?php
			header("Location: listarProdutos.php");
			exit;
		?>
	</center>