<?php

$codProduto = $_POST['codProduto']; //recebe o valor do atributo
$nomeProduto = $_POST['nomeProduto'];
$qtdProduto = $_POST['qtdProduto'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

echo 'Código: ', $codProduto;
echo '\nNome:', $nomeProduto;
echo '\nQuantidade: ', $qtdProduto;
echo '\nCategoria: ', $categoria;
echo '\nFornecedor: ', $fornecedor;

$nomeProduto = nl2br($nomeProduto);
echo $nomeProduto;
?>