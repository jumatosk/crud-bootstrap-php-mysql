<?php
include 'conexao.php';
include 'script/password.php';

$nomedeusuario = $_POST['nomedeusuario'];
$email = $_POST['email'];
$senhadeusuario = $_POST['senhadeusuario'];
$nivelusuario = $_POST['nivelusuario'];

$sql = "INSERT INTO usuarios (nomedeusuario, email, senhadeusuario, nivelusuario) VALUES ('$nomedeusuario', '$email', sha1('$senhadeusuario'), $nivelusuario)";

$inserir = mysqli_query($conexao, $sql);
?>