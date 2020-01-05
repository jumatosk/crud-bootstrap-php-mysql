<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomedeusuario'];
$mail = $_POST['email'];
$senhausuario = $_POST['senhadeusuario'];
//$niveldeusuario = $_POST['niveldeusuario'];
$statususuario = 'Inativo';

$sql = "INSERT INTO usuarios (nomedeusuario, email, senhadeusuario, status) VALUES ('$nomeusuario', '$mail', sha1('$senhausuario'), '$statususuario')";

$inserir =  mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px";>
<center>
	<h4>Usuário cadastrado com sucesso, aguarde aprovação!</h4>
</center>
<div style="padding-top: 30px">
	<center>
		<a href="index.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Início</a>
		<a href="cadastroUsuario.php" role="button" class="btn btn-sm btn-info" style="margin: 30px">Cadastrar</a>
	</center>
</div>
</div>