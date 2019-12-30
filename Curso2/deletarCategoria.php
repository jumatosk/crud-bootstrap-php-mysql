<?php

include 'conexao.php';

$idcategoria = $_GET['idcategoria'];

$sql = "DELETE FROM categoria WHERE idcategoria = $idcategoria";

$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
		<h3>Removida com sucesso!</h3>
		<div style="margin-top: 10px">
			<a href="listarCategorias.php" class="btn btn-sm btn-info" style="color: #fff">Voltar</a>
		</div>