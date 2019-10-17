<?php

include 'conexao.php';

$codProduto = $_POST['codProduto']; //recebe o valor do atributo
$nomeProduto = $_POST['nomeProduto'];
$qtdProduto = $_POST['qtdProduto'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`(`codigoproduto`, `nomeproduto`, `quantidade`, `categoria`, `fornecedor`) VALUES ($codProduto,'$nomeProduto',$qtdProduto,'$categoria','$fornecedor')";

$inserir =  mysqli_query($conexao,$sql);

?>