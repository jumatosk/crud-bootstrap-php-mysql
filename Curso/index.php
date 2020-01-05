<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<title>Entre em sua conta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		#tamanho {
			width: 350px;
			margin-top: 50px;
			border-radius: 15px;
			border: 2px solid #f3f3f3;
			-webkit-box-shadow: 10px 10px 16px -6px rgba(148,148,148,0.84);
			-moz-box-shadow: 10px 10px 16px -6px rgba(148,148,148,0.84);
			box-shadow: 10px 10px 16px -6px rgba(148,148,148,0.84);
		}
	</style>

</head>
<body>
	<div class="container" id="tamanho">
		<div style="padding: 10px;">
			<center>
				<img src="imagem/cadeado.png" width="100px" height="100px">
			</center>
			<form action="index1.php" method="post"> 
				<div class="form-group ">
					<label>Usuário</label>
					<input type="text" name="usuario" class="form-control" placeholder="Usuario" autocomplete="off" required>
					<label>Senha</label>
					<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
				</div>
				
				<div style="text-align: right;">
					<button type="submit" class="btn btn-sm btn-success" >Entrar</button>
				</div>
			</form>
		</div>
	</div>

	<div style="margin-top: 20px">
		<center>
			<p>Não possui conta? <a href="cadastroUsuarioExterno.php">Cadastre-se</a></p>
			
		</center>
	</div>



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>