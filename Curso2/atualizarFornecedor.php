<?php 

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];

$sql = "UPDATE fornecedor SET nome = '$nome' WHERE id = $id";

$atualizar = mysqli_query($conexao, $sql);
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
		<h3>
			Atualizado com sucesso!
		</h3>
		<div style="margin-top: 10px">
			<a href="listarFornecedor.php" class="btn btn-sm btn-info" style="color: #fff">Listar cadastrados</a>
		</div>
	</center>
</div>