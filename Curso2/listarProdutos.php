<!DOCTYPE html>
<html>
<head>
	<title>Lista de produtos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/8786c39b09.js"></script>

	<style type="text/css">
		#relative {
			position: fixed;
			width: 100px;
			height: 400px;
		}
		#fixed {
			position: fixed;
			top: 120px;
			right: 120px;
			width: 200px;
			height: 50px;
		}
	</style>

</head>
<body>
	<div class="container" style="margin-top: 50px">
		<h3>Produtos Cadastrados</h3>


		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Nome</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Categoria</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tr>
				<?php 
				include 'conexao.php';
				$sql = "SELECT * FROM `estoque`";
				$busca = mysqli_query($conexao, $sql);

				while($array = mysqli_fetch_array($busca)){
					$idEstoque = $array['codigoestoque'];
					$codProduto = $array['codigoproduto'];
					$nomeProduto = $array['nomeproduto'];
					$qtdProduto = $array['quantidade'];
					$categoria = $array['categoria'];
					$fornecedor = $array['fornecedor'];
					?>
					<tr>	
						<td><?php echo $codProduto ?></td>
						<td><?php echo $nomeProduto ?></td>
						<td><?php echo $qtdProduto ?></td>
						<td><?php echo $categoria ?></td>
						<td><?php echo $fornecedor ?></td>
						<td> <a class="btn btn-secondary btn-sm" style="color:#fff" href="editarProduto.php?id=<?php echo $idEstoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;</a>

							<a class="btn btn-danger btn-sm" style="color:#fff" href="deletarProduto.php?id=<?php echo $idEstoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;</a></td>
						</tr>

					<?php } ?>
				</tr>
			</table>
			<div style="text-align: right">
				<a href="menu.php" role="button" class="btn btn-sm btn-primary">Menu</a>
			</div>

		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	</body>
	</html>