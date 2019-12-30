<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		#tamanho {
			width: 450px;
			margin-top: 50px;
			border-radius: 10px;
			border: 2px solid #f3f3f3;
			-webkit-box-shadow: 10px 10px 16px -6px rgba(148,148,148,0.84);
			-moz-box-shadow: 10px 10px 16px -6px rgba(148,148,148,0.84);
			box-shadow: 10px 10px 16px -6px rgba(148,148,148,0.84);
		}
	</style>

</head>
<body>

	<div id="tamanho" class="container">
		<div style="padding: 10px;"><center>
			<img src="imagem/cadastrousuario.png" width="100px" height="100px">
		</center>
		<form action="insertusuario.php" method="post">
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
			<div class="form-group">
				<label>Nível de acesso</label>
				<select name="nivelusuario" class="form-control">
					<option value="1">Administrador</option>
					<option value="2">Funcionário</option>
					<option value="3">Conferente</option>
				</select>
			</div>
			<div style="text-align: right;">
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