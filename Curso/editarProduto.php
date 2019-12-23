<?php

include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de alteração</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<style type="text/css">
		#tamanhoContainer{
			width: 600px;
		}

		#botao{
			background-color: #4878A8; /*cor do fundo*/
			color: #ffffff; /* cor da letra*/
			width: 470px;
			border-radius: 20px;
		}
	</style>

</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 100px">
		<h4 style="text-align: center;">Alteração do produto cadastrado</h4>
		<form action="atualizarProduto.php" method="post" style="margin-top: 50px">
			<?php

			$sql = "SELECT * FROM `estoque` WHERE codigoestoque = $id";
			$busca = mysqli_query($conexao, $sql);

			while($array = mysqli_fetch_array($busca)){

				$idEstoque = $array['codigoestoque'];
				$codProduto = $array['codigoproduto'];
				$nomeProduto = $array['nomeproduto'];
				$qtdProduto = $array['quantidade'];
				$categoria = $array['categoria'];
				$fornecedor = $array['fornecedor'];

				?>
				<div class="form-group">
					<label>Código do produto</label>
					<input type="number" class="form-control" name="codProduto" value="<?php echo $codProduto ?>" disabled>
					<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
				</div>

				<div class="form-group">
					<label>Nome do produto</label>
					<input type="text" class="form-control" name="nomeProduto" value="<?php echo $nomeProduto ?>">
				</div>

				<div class="form-group">
					<label>Quantidade de produtos</label>
					<input type="number" class="form-control" name="qtdProduto" value="<?php echo $qtdProduto ?>">
				</div>

				<div class="form-group">
					<label>Categoria</label>
					<select class="form-control" name="categoria" required>
						<?php  
						include 'conexao.php';
						$sql = "SELECT * FROM categoria order by nomecategoria ASC";
						$buscar = mysqli_query($conexao, $sql);

						while($array = mysqli_fetch_array($buscar)){
							$idcategoria = $array['idcategoria'];
							$nomecategoria = $array['nomecategoria'];

							?>
							<option><?php echo $nomecategoria?></option>					
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label>Fornecedor</label>
					<select class="form-control" name="fornecedor" required>
						<?php  
						include 'conexao.php';
						$sql2 = "SELECT * FROM fornecedor order by nome ASC";
						$buscar2 = mysqli_query($conexao, $sql2);

						while($array2 = mysqli_fetch_array($buscar2)){
							$id = $array2['id'];
							$nome = $array2['nome'];

							?>
							<option><?php echo $nome?></option>					
						<?php } ?>
					</select>
				</div>

				<div style="text-align: center;">
					<button type="submit" id="botao" class="btn">Atualizar</button>
				</div>
			<?php } ?>
		</form>	




		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
	</html>