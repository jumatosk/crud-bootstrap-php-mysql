<!DOCTYPE html>
<html>
<head>
	<title>Aguardando aprovação</title>
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
	<div class="container" style="margin-top: 40px;">
		<h3>Usuários aguardando aprovação</h3>


		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Usuário</th>
					<th scope="col">E-mail</th>
					<th scope="col">Nível</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tr>
				<?php 
				include 'conexao.php';
				$sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
				$busca = mysqli_query($conexao, $sql);

				while($array = mysqli_fetch_array($busca)){
					$idusuario = $array['idusuario'];
					$nomedeusuario= $array['nomedeusuario'];
					$email = $array['email'];
					$niveldeusuario = $array['niveldeusuario'];
					?>
					<tr>	
						<td><?php echo $nomedeusuario ?></td>
						<td><?php echo $email ?></td>
						<td><?php echo $niveldeusuario ?></td>
						

						<td> <a class="btn btn-success btn-sm" href="aprovacaoUsuario.php?idusuario=<?php echo $idusuario ?> &niveldeusuario=1" role="button"><i class="far fa-check-square"></i>&nbsp;Administrador</a>
							<a class="btn btn-warning btn-sm" href="aprovacaoUsuario.php?idusuario=<?php echo $idusuario ?> &niveldeusuario=2" role="button"><i class="far fa-check-square"></i>&nbsp;Funcionário</a>
							<a class="btn btn-dark btn-sm" href="aprovacaoUsuario.php?idusuario=<?php echo $idusuario ?> &niveldeusuario=3" role="button"><i class="far fa-check-square"></i>&nbsp;Conferente</a>

							<a class="btn btn-danger btn-sm" href="deletarUsuario.php?idusuario=<?php echo $idusuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
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