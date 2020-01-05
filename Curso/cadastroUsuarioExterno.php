<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>

	<div class="container" style="width: 400px">
		<div style="padding: 10px;">
			<center>
				<img src="imagem/cadastrousuario.png" width="100px" height="100px">
			</center>
		</div>
		<form action="insertUsuarioExterno.php" method="post">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="nomedeusuario" class="form-control" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" name="email" class="form-control" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Senha</label>
				<input id="txtSenha" type="password" name="senhadeusuario" class="form-control" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Repetir senha</label>
				<input type="password" name="repetirsenhadeusuario" class="form-control" required autocomplete="off" oninput="validaSenha(this)">
			</div>

			<div style="text-align: right;">
				<a href="index.php" class="btn btn-sm btn-primary">Voltar</a>
				<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
			</div>
		</div>
	</form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
	function validaSenha (input){ 
		if (input.value != document.getElementById('txtSenha').value) {
			input.setCustomValidity('Repita a senha corretamente');
		} else {
			input.setCustomValidity('');
		}
	} 
</script>

</body>
</html>