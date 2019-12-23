<!DOCTYPE html>
<html>
<head>
	<title>Lista de categorias</title>
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
	<div class="container" style="margin-top: 40px; width: 500px">
		<h3>Categorias Cadastradas</h3>


		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tr>
				<?php 
				include 'conexao.php';
				$sql = "SELECT * FROM `categoria`";
				$busca = mysqli_query($conexao, $sql);

				while($array = mysqli_fetch_array($busca)){
					$idcategoria = $array['idcategoria'];
					$nomecategoria = $array['nomecategoria'];

					?>
					<tr>	
						<td><?php echo $nomecategoria ?></td>

						<td> <a class="btn btn-secondary btn-sm" style="color:#fff" href="editarCategoria.php?idcategoria=<?php echo $idcategoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;</a>

							<a class="btn btn-danger btn-sm" style="color:#fff" href="deletarCategoria.php?idcategoria=<?php echo $idcategoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;</a></td>
						</tr>

					<?php } ?>
				</tr>
			</table>
			<div style="text-align: right">
				<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			</div>

		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	</body>
	</html>