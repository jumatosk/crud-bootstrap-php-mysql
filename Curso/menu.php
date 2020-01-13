<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<?php
	session_start();
	$usuario = $_SESSION['usuario'];

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php');
	}
	include 'conexao.php';

	$sql = "SELECT niveldeusuario FROM usuarios WHERE email = '$usuario' AND status = 'Ativo'";
	$buscar = mysqli_query($conexao, $sql);
	$array = mysqli_fetch_array($buscar);
	$nivel = $array['niveldeusuario'];
	?>
	<div class="container" style="text-align: right; margin-top: 10px; margin-right: 120px">
		<a class="btn btn-warning" href="logout.php">Sair</a>	
	</div>
	
	<div class="container" style="margin-top: 100px">
		<div class="row">
			<?php
			if($nivel == 1 || $nivel == 2){
				?>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Cadastrar produto</h5>
							<a href="cadastrarProduto.php" class="btn btn-primary">Novo</a>
						</div>
					</div>
				</div>

			<?php } ?>

			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Visualizar produtos cadastrados</h5>
						<a href="listarProdutos.php" class="btn btn-primary">Listar</a>
					</div>
				</div>
			</div>

			<div class="col-sm-6" style="margin-top: 20px">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Cadastrar categoria</h5>
						<a href="cadastrarCategoria.php" class="btn btn-primary">Nova</a>
					</div>
				</div>
			</div>

			<div class="col-sm-6" style="margin-top: 20px">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Visualizar categorias cadastradas</h5>
						<a href="listarCategorias.php" class="btn btn-primary">Listar</a>
					</div>
				</div>
			</div>

			<div class="col-sm-6" style="margin-top: 20px">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Cadastrar fornecedor</h5>
						<a href="cadastrarFornecedor.php" class="btn btn-primary">Novo</a>
					</div>
				</div>
			</div>

			<div class="col-sm-6" style="margin-top: 20px">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Visualizar fornecedores cadastrados</h5>
						<a href="listarFornecedor.php" class="btn btn-primary">Listar</a>
					</div>
				</div>
			</div>

			<div class="col-sm-6" style="margin-top: 20px">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Cadastrar Usuário</h5>
						<a href="cadastroUsuario.php" class="btn btn-primary">Cadastrar</a>
					</div>
				</div>
			</div>

			<div class="col-sm-6" style="margin-top: 20px">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Aprovar Usuários</h5>
						<a href="aprovarusuario.php" class="btn btn-primary">Aprovar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>