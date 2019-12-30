<?php

include 'conexao.php';

$idusuario = $_GET['idusuario'];

$deletar = "DELETE FROM usuarios WHERE idusuario = $idusuario";

$query = mysqli_query($conexao, $deletar);

header("Location:aprovarusuario.php");

?>

